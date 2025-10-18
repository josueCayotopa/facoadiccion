import './bootstrap';

// Registro de correos: modal + almacenamiento local y envío opcional
(() => {
	const openBtn = document.getElementById('registro-btn');
	const modal = document.getElementById('registro-modal');
		// Botón X se detectará por atributo [data-close-modal]
		const form = document.getElementById('registro-form');
	const emailInput = document.getElementById('registro-email');
		const nameInput = document.getElementById('registro-nombre');
	const errorMsg = document.getElementById('registro-error');
	const successMsg = document.getElementById('registro-success');
	const submitBtn = document.getElementById('registro-submit');

	if (!openBtn || !modal) return; // El hero podría no estar en todas las páginas

	const toggleModal = (show) => {
		if (show) {
			modal.classList.remove('hidden');
			modal.classList.add('flex');
		document.body.classList.add('overflow-hidden');
			setTimeout(() => emailInput?.focus(), 50);
		} else {
			modal.classList.add('hidden');
			modal.classList.remove('flex');
		document.body.classList.remove('overflow-hidden');
		}
	};

	const isValidEmail = (email) => {
		// Validación sencilla pero efectiva
		return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(String(email).toLowerCase());
	};

			const postToEndpoint = async (email) => {
			// 1) Si el form tiene action y method, usar FormData como recomienda Formspree
			if (form && form.getAttribute('action')) {
				try {
					const data = new FormData(form);
					// Asegurar que email actual esté en el formdata
					data.set('email', email);
						if (nameInput && nameInput.value.trim()) data.set('name', nameInput.value.trim());
					const res = await fetch(form.getAttribute('action'), {
						method: form.getAttribute('method') || 'POST',
						body: data,
						headers: {
							'Accept': 'application/json',
						},
					});
					return { sent: res.ok };
				} catch (e) {
					console.warn('Fallo al enviar el formulario:', e);
					return { sent: false };
				}
			}

			// 2) Si no hay action, usar data-endpoint en el modal (JSON)
			const endpoint = modal.getAttribute('data-endpoint');
			if (!endpoint) return { sent: false };
			try {
						const res = await fetch(endpoint, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
						'Accept': 'application/json',
						...(window.csrfToken ? { 'X-CSRF-TOKEN': window.csrfToken } : {}),
					},
							body: JSON.stringify({ email, ...(nameInput?.value ? { name: nameInput.value.trim() } : {}) }),
				});
				return { sent: res.ok };
			} catch (e) {
				console.warn('Fallo al enviar al endpoint:', e);
				return { sent: false };
			}
		};

	openBtn.addEventListener('click', () => toggleModal(true));
			// Cerrar por botón (data-close-modal) y por overlay (data-close-overlay)
			modal.addEventListener('click', (e) => {
				if (e.target instanceof Element) {
					if (e.target.closest('[data-close-modal]')) {
						toggleModal(false);
						return;
					}
					if (e.target.hasAttribute('data-close-overlay')) {
						toggleModal(false);
						return;
					}
				}
				if (e.target === modal) toggleModal(false);
			});
	window.addEventListener('keydown', (e) => {
		if (e.key === 'Escape') toggleModal(false);
	});

	form?.addEventListener('submit', async (e) => {
		e.preventDefault();
		errorMsg?.classList.add('hidden');
		successMsg?.classList.add('hidden');

		const email = emailInput.value.trim();
		if (!isValidEmail(email)) {
			errorMsg?.classList.remove('hidden');
			emailInput.focus();
			return;
		}

		// UI loading state
		const originalText = submitBtn.innerHTML;
		submitBtn.disabled = true;
		submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Guardando...</span>';

		// Enviar al endpoint (Formspree o similar)
		await postToEndpoint(email);

		// Mostrar éxito
		successMsg?.classList.remove('hidden');
		submitBtn.disabled = false;
		submitBtn.innerHTML = originalText;

		// Cerrar luego de un tiempo
		setTimeout(() => toggleModal(false), 1200);
	});

})();
