<div class="py-24 bg-gray-50">
    <div class="w-4/5 mx-auto text-center">
        <div class="flex justify-between items-center">

            <h2 class="text-5xl font-bold mb-6 text-gray-600 relative -top-10" data-ar="ما يقوله عملاؤنا"
                data-en="What our customers say">
                ما يقوله عملاؤنا
            </h2>

            <!-- Navigation Arrows -->
            <div class="flex justify-center items-center gap-x-3 mb-4">
                <button class="left-arrow bg-orange-500 text-white p-3 rounded-full hover:bg-orange-400 transition">
                    <i class="fas fa-arrow-left text-3xl"></i>
                </button>
                <button class="right-arrow bg-orange-500 text-white p-3 rounded-full hover:bg-orange-400 transition">
                    <i class="fas fa-arrow-right text-3xl"></i>
                </button>
            </div>
        </div>

        <div class="relative mx-auto">
            <div class="flex space-x-4 overflow-x-hidden snap-x snap-mandatory testimonials-container">
                @foreach($reviews as $review)
                <div class="bg-white rounded-lg shadow-md p-6 flex-shrink-0 w-80 mx-3 snap-center">
                    <div class="flex flex-col justify-center items-center mb-4 gap-y-3">
                        <div class="flex text-right">
                            @for ($i = 1; $i <= 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 {{ $i <= $review->rate ? 'text-yellow-500' : 'text-gray-300' }}"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15.27L16.18 20 14.54 13.97 20 9.24l-8.63-.74L10 .5 8.63 8.5 0 9.24l5.46 4.73L3.82 20z" />
                                </svg>
                                @endfor
                        </div>

                        <p class="text-gray-600 mb-4 text-center">{{ $review->desc_en }}</p>
                        <div class="flex justify-start items-center text-right">
                            <img loading="lazy"
                                src="{{ $review->customer_image ? asset($review->customer_image) : asset('images/default-avatar.png') }}"
                                alt="{{ $review->customer_name_en }}" class="p-1 w-12 h-12 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-lg">{{ $review->customer_name_en }}</h3>
                                <h4 class="font-semibold text-gray-800">{{ $review->title_en }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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

<style>
.testimonials-container {
    scroll-behavior: smooth;
}

.left-arrow,
.right-arrow {
    transition: background-color 0.3s ease, transform 0.3s ease;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.left-arrow:disabled,
.right-arrow:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.left-arrow:disabled:hover,
.right-arrow:disabled:hover {
    transform: none;
}
</style>