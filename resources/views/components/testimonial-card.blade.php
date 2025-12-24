@props([
    'name' => '',
    'role' => '',
    'testimonial' => '',
    'rating' => 5
])

<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
    <div class="flex justify-center mb-3">
        @for($i = 1; $i <= 5; $i++)
            <span class="{{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }} text-lg">★</span>
        @endfor
    </div>
    <p class="text-gray-600 italic text-center mb-4 leading-relaxed">
        "{{ $testimonial }}"
    </p>
    <div class="text-center">
        <p class="font-semibold text-gray-900">{{ $name }}</p>
        <p class="text-gray-500 text-sm mt-1">{{ $role }}</p>
    </div>
</div>