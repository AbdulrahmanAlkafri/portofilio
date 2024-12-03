<div class="flex items-center justify-center min-h-screen p-4">
    <div class="relative w-full max-w-4xl lg:max-w-5xl p-4 bg-white rounded-lg shadow-lg">

        <!-- Navigation Arrows -->
        <button id="prev"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow-md p-2 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button id="next"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow-md p-2 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Image Container -->
        <div class="overflow-hidden rounded-lg mx-auto">
            <img id="carouselImage" src="{{ asset('images/slides/slide1.png') }}" alt="Image Carousel"
                class="w-full h-auto transition-transform duration-300 ease-in-out">
        </div>
    </div>
</div>

<!-- Blade Component Script -->
<script>
const images = [
    "{{ asset('images/slides/slide1.png') }}",
    "{{ asset('images/slides/slide2.png') }}",
    "{{ asset('images/slides/slide3.png') }}",
];

let currentIndex = 0;

const carouselImage = document.getElementById('carouselImage');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

function updateImage() {
    carouselImage.src = images[currentIndex];
}

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
});
</script>