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
            el.src = el.dataset[lang];
            if (el.dataset.lang) {
                el.style.display = el.dataset.lang === lang ? "block" : "none";
            }
        } else {
            el.textContent = el.dataset[lang];
            if (el.placeholder) {
                el.placeholder = el.dataset[lang];
            }

            // Adjust alignment classes based on language
            if (!el.classList.contains("text-center")) {
                if (lang === "ar") {
                    el.classList.remove("text-left");
                    el.classList.add("text-right");
                } else {
                    el.classList.remove("text-right");
                    el.classList.add("text-left");
                }
            }
        }
    });

    // Update the arrow direction
    const arrowSvg = document.getElementById("arrowSvg");
    const arrowPath = document.getElementById("arrowPath");
    if (lang === "en") {
        arrowPath.setAttribute("transform", "rotate(180, 12.5, 12.5)"); // Rotate for right arrow if RTL
    } else {
        arrowPath.setAttribute("transform", "rotate(0, 12.5, 12.5)"); // Default left arrow for LTR
    }
}

// You would keep the load event listener as is
window.addEventListener("load", function () {
    const dir = localStorage.getItem("dir") || "ltr"; // Default to LTR
    document.documentElement.setAttribute("dir", dir);
    document.body.setAttribute("dir", dir);
    document.getElementById("language-toggle").checked = dir === "rtl";

    // Set the initial text based on direction
    updateText(dir === "rtl" ? "ar" : "en");
});
// On page load, set the direction and language based on localStorage
window.addEventListener("load", function () {
    const dir = localStorage.getItem("dir") || "ltr"; // Default to LTR
    document.documentElement.setAttribute("dir", dir);
    document.body.setAttribute("dir", dir);
    document.getElementById("language-toggle").checked = dir === "rtl";

    // Set the initial text based on direction
    updateText(dir === "rtl" ? "ar" : "en");
});

// On page load, set the direction and language based on localStorage
window.addEventListener("load", function () {
    const dir = localStorage.getItem("dir") || "ltr"; // Default to LTR
    document.documentElement.setAttribute("dir", dir);
    document.body.setAttribute("dir", dir);
    document.getElementById("language-toggle").checked = dir === "rtl";

    // Set the initial text based on direction
    updateText(dir === "rtl" ? "ar" : "en");
});
