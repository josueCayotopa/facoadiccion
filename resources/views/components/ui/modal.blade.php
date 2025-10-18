@props([
	'id' => null,
	'show' => false,
	'zIndex' => 'z-[1000]',
	'dialogClass' => 'relative w-full max-w-lg bg-white rounded-2xl shadow-2xl overflow-hidden',
	'overlayClass' => 'absolute inset-0 bg-black/70 backdrop-blur-sm',
])

<div
	@if($id) id="{{ $id }}" @endif
	class="fixed inset-0 {{ $zIndex }} {{ $show ? 'flex' : 'hidden' }} items-center justify-center p-4 md:p-6"
	role="dialog"
	aria-modal="true"
	{{ $attributes }}
>
	<div class="{{ $overlayClass }}" data-close-overlay></div>
	<div class="{{ $dialogClass }}">
		<button type="button" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600" data-close-modal aria-label="Cerrar">
			<i class="fas fa-times text-xl"></i>
		</button>

		{{ $slot }}
	</div>
    
</div>

