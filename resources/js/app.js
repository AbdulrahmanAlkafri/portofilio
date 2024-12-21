import "./bootstrap";
import "@fortawesome/fontawesome-free/js/all";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
document.addEventListener("scroll", function () {
    const numbers = document.querySelectorAll(".number");
    numbers.forEach((number) => {
        const target = +number.getAttribute("data-target");
        const countUpAnimation = () => {
            const displayedNumber = +number.textContent;

            // Check if the number has already animated
            if (displayedNumber < target) {
                const increment = Math.ceil(target / 400); // Change this for faster or slower animation
                number.textContent = Math.min(
                    displayedNumber + increment,
                    target
                ); // Avoid overshooting
                requestAnimationFrame(countUpAnimation); // Continue the animation
            }
        };

        // Start animating when the number is in the viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    countUpAnimation(); // Start animation
                    observer.unobserve(number); // Stop observing after animating
                }
            });
        });

        observer.observe(number); // Observe the number elements
    });
});
document
    .getElementById("language-toggle")
    .addEventListener("change", function () {
        if (this.checked) {
            // Switch to Arabic (RTL)
            document.documentElement.setAttribute("dir", "rtl");
            document.body.setAttribute("dir", "rtl");
            localStorage.setItem("dir", "rtl");
            // Update text to Arabic
            updateText("ar");
        } else {
            // Switch to English (LTR)
            document.documentElement.setAttribute("dir", "ltr");
            document.body.setAttribute("dir", "ltr");
            localStorage.setItem("dir", "ltr");
            // Update text to English
            updateText("en");
        }
        location.reload();
    });
// Function to update text and images based on language
function updateText(lang) {
    const elements = document.querySelectorAll("[data-en], [data-ar]");
    elements.forEach((el) => {
        if (el.tagName.toLowerCase() === "img") {
            el.src = el.dataset[lang]; // Update image src if applicable
            // Control visibility based on language
            if (el.dataset.lang) {
                el.style.display = el.dataset.lang === lang ? "block" : "none"; // Show or hide based on lang
            }
        } else {
            el.textContent = el.dataset[lang]; // Update text for headings, button text, etc.
            if (el.placeholder) {
                el.placeholder = el.dataset[lang];
            }
        }
    });
}

// On page load, set the direction and language based on localStorage
window.addEventListener("load", function () {
    const dir = localStorage.getItem("dir") || "ltr"; // Default to LTR
    document.documentElement.setAttribute("dir", dir);
    document.body.setAttribute("dir", dir);
    document.getElementById("language-toggle").checked = dir === "rtl";

    // Set the initial text based on direction
    updateText(dir === "rtl" ? "ar" : "en");
});
