@props(['class' => '', 'dataAr' => '', 'dataEn' => ''])

<div class="bg-white border border-gray-300 rounded-full shadow-md my-2 z-10 flex items-center justify-center {{ $class }}"
    data-ar="{{ $dataAr }}" data-en="{{ $dataEn }}">
    <p class="text-center text-lg font-semibold text-gray-800">
        <!-- Display Arabic text if available; otherwise, display English text -->
        {{ $dataAr ?: $dataEn }}
    </p>
</div>