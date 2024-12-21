<div class="flex items-center justify-center min-h-screen p-4 bg-white">
    <div class="relative w-full max-w-4xl lg:max-w-5xl p-4 ">

        <!-- Navigation Arrows -->
        <button id="prev"
            class="absolute -left-10 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow-md p-2 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <button id="next"
            class="absolute -right-10 top-1/2 transform -translate-y-1/2 bg-white rounded-full shadow-md p-2 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Image Container -->
        <div class="overflow-hidden rounded-lg mx-auto shadow-lg">
            <img id="carouselImage" data-en="{{ asset('images/slides/solution1.png') }}"
                data-ar="{{ asset('images/slides/slide1.png') }}" src="{{ asset('images/slides/slide1.png') }}"
                alt="Image Carousel" class="w-full h-auto transition-transform duration-300 ease-in-out">
        </div>
    </div>
</div>

<!-- Blade Component Script -->
<script>
const images = {
    en: [
        "{{ asset('images/slides/solution1.png') }}",
        "{{ asset('images/slides/solution2.png') }}",
        "{{ asset('images/slides/solution3.png') }}"
    ],
    ar: [
        "{{ asset('images/slides/slide1.png') }}",
        "{{ asset('images/slides/slide2.png') }}",
        "{{ asset('images/slides/slide3.png') }}"
    ]
};

let currentIndex = 0;
let currentLanguage = sessionStorage.getItem("dir") === "rtl" ? "ar" : "en"; // Default language  

const carouselImage = document.getElementById('carouselImage');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

// Function to update the displayed image  
function updateImage() {
    carouselImage.src = images[currentLanguage][currentIndex];
}

// Function to switch language  
function switchLanguage(lang) {
    currentLanguage = lang;
    currentIndex = 0; // Reset to the first image  
    updateImage();
}

// Event listeners for navigation buttons  
nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images[currentLanguage].length;
    updateImage();
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images[currentLanguage].length) % images[currentLanguage].length;
    updateImage();
});

// Language toggle event listener  
const languageToggle = document.getElementById("language-toggle");
if (languageToggle) {
    languageToggle.addEventListener("change", function() {
        const lang = this.checked ? "ar" : "en"; // Determine language based on toggle state  
        const dir = lang === "ar" ? "rtl" : "ltr";

        document.documentElement.setAttribute("dir", dir);
        document.body.setAttribute("dir", dir);
        sessionStorage.setItem("dir", dir); // Store the direction  

        // Update text and image to the selected language  
        updateText(lang);
        switchLanguage(lang);
    });
}

// Update text and images based on language  
function updateText(lang) {
    const elements = document.querySelectorAll("[data-en], [data-ar]");
    elements.forEach((el) => {
        if (el.tagName.toLowerCase() === "img") {
            el.src = el.dataset[lang]; // Update image src  
        } else {
            el.textContent = el.dataset[lang]; // Update text  
        }
    });
}

// On page load, set the direction and language based on sessionStorage  
window.addEventListener("load", function() {
    const dir = sessionStorage.getItem("dir") || "ltr"; // Default to LTR  
    document.documentElement.setAttribute("dir", dir);
    document.body.setAttribute("dir", dir);
    languageToggle.checked = dir === "rtl";

    // Set the initial text and logo image based on direction  
    const initialLang = dir === "rtl" ? "ar" : "en";
    updateText(initialLang);
    switchLanguage(initialLang);
});
</script>