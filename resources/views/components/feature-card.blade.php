@props([
    'image' => '',
    'title' => '',
    'description' => ''
])

<div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
    <div class="flex justify-center mb-4">
        <img src="{{ asset($image) }}" class="w-20 h-20 object-contain" alt="{{ $title }}">
    </div>
    <h3 class="text-xl font-semibold text-center mb-3 text-gray-900">{{ $title }}</h3>
    <p class="text-gray-600 text-center leading-relaxed">
        {{ $description }}
    </p>
</div>