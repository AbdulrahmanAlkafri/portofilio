{{-- resources/views/components/testimonials.blade.php --}}

<div class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">ما يقوله عملاؤنا</h2>
        <div class="relative mx-auto">
            <div class="flex space-x-4 overflow-x-hidden snap-x snap-mandatory testimonials-container">
                @foreach($reviews as $review)
                <div class="bg-white rounded-lg shadow-md p-6 flex-shrink-0 w-80 snap-center">
                    <div class="flex items-center mb-4">
                        <img loading="lazy"
                            src="{{ $review->customer_image ? asset($review->customer_image) : asset('images/default-avatar.png') }}"
                            alt="{{ $review->customer_name }}" class="p-1 w-12 h-12 rounded-full mr-3">
                        <div>
                            <h3 class="font-semibold text-lg">{{ $review->customer_name }}</h3>
                            <div class="flex">
                                @for ($i = 1; $i <= 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 {{ $i <= $review->rate ? 'text-yellow-500' : 'text-gray-300' }}"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15.27L16.18 20 14.54 13.97 20 9.24l-8.63-.74L10 .5 8.63 8.5 0 9.24l5.46 4.73L3.82 20z" />
                                    </svg>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $review->desc }}</p>
                    <h4 class="font-semibold text-gray-800">{{ $review->title }}</h4>
                </div>
                @endforeach
            </div>

            <!-- Navigation Arrows -->
            <button
                class="left-arrow absolute top-1/2 left-0 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full hover:bg-orange-400 transition">
                &#10094;
                <!-- Left Arrow -->
            </button>
            <button
                class="right-arrow absolute top-1/2 right-0 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full hover:bg-orange-400 transition">
                &#10095;
                <!-- Right Arrow -->
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    const testimonialsContainer = document.querySelector('.testimonials-container');

    let scrollAmount = 0;

    rightArrow.addEventListener('click', () => {
        scrollAmount += 300; // Adjust this value based on your card width  
        testimonialsContainer.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    leftArrow.addEventListener('click', () => {
        scrollAmount -= 300; // Adjust this value based on your card width  
        testimonialsContainer.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
});
</script>