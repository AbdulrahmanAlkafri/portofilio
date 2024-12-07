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
