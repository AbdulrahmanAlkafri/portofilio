<div class="py-10 bg-gray-50">
    <div class="w-full mx-auto text-center">
        <h2 class="text-5xl font-bold mb-6 text-gray-800" data-ar="ما يقوله عملاؤنا" data-en="What our customers say">
            ما يقوله عملاؤنا
        </h2>
        <div class="relative mx-auto">
            <div class="flex space-x-4 overflow-x-hidden snap-x snap-mandatory testimonials-container">
                @foreach($reviews as $review)
                <div class="bg-white rounded-lg shadow-md p-6 flex-shrink-0 w-80 mx-3 snap-center">
                    <div class="flex items-center mb-4">
                        <img loading="lazy"
                            src="{{ $review->customer_image ? asset($review->customer_image) : asset('images/default-avatar.png') }}"
                            alt="{{ $review->customer_name_en }}" class="p-1 w-12 h-12 rounded-full mr-3">
                        <div>
                            <h3 class="font-semibold text-lg">{{ $review->customer_name_en }}</h3>
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
                    <p class="text-gray-600 mb-4">{{ $review->desc_en }}</p>
                    <h4 class="font-semibold text-gray-800">{{ $review->title_en }}</h4>
                </div>
                @endforeach
            </div>

            <!-- Navigation Arrows -->
            <button
                class="left-arrow absolute top-1/2 left-0 transform -translate-y-1/2 bg-orange-500 text-white py-2 px-4 rounded-3xl hover:bg-orange-400 transition">
                &#10094;
            </button>
            <button
                class="right-arrow absolute top-1/2 right-0 transform -translate-y-1/2 bg-orange-500 text-white py-2 px-4 rounded-3xl hover:bg-orange-400 transition">
                &#10095;
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    const testimonialsContainer = document.querySelector('.testimonials-container');

    // Use a more reliable way to determine card width  
    const cardWidth = testimonialsContainer.querySelector('.snap-center').offsetWidth + 24; // include margin  

    rightArrow.addEventListener('click', () => {
        testimonialsContainer.scrollBy({
            left: cardWidth,
            behavior: 'smooth'
        });
    });

    leftArrow.addEventListener('click', () => {
        testimonialsContainer.scrollBy({
            left: -cardWidth,
            behavior: 'smooth'
        });
    });
});
</script>

<style>
.testimonials-container {
    scroll-behavior: smooth;
    /* Smooth scrolling effect */
}

.left-arrow,
.right-arrow {
    transition: opacity 0.3s ease;
    /* Smooth transition for opacity */
}
</style>