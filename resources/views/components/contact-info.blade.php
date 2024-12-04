<div class="flex flex-wrap justify-center bg-white p-4">
    <!-- Email Card -->
    <div class="p-5 text-center flex flex-col items-center w-full sm:w-1/3">
        <img src="{{ asset('images/contact/contact-mail.png') }}" alt="Email Icon" class="mb-2">
        <a href="mailto:kitchplus04@gmail.com"
            class="flex items-center justify-center w-2/3 px-5 py-2 text-white bg-orange-500 rounded-lg gap-2">
            تواصل <i class="fas fa-arrow-left arrow-left"></i>
        </a>
    </div>
    <!-- Phone Card -->
    <div class="p-5 text-center flex flex-col items-center w-full sm:w-1/3">
        <img src="{{ asset('images/contact/contact-phone.png') }}" alt="Phone Icon" class="mb-2">
        <a href="tel:+02147808173"
            class="flex items-center justify-center w-2/3 px-5 py-2 text-black border border-black rounded-lg gap-2">
            تواصل <i class="fas fa-arrow-left arrow-left"></i>
        </a>
    </div>
    <!-- Location Card -->
    <div class="p-5 text-center flex flex-col items-center w-full sm:w-1/3">
        <img src="{{ asset('images/contact/contact-location.png') }}" alt="Location Icon" class="mb-2">
        <a href="https://www.google.com/maps" target="_blank"
            class="flex items-center justify-center w-2/3 px-5 py-2 text-black border border-black rounded-lg gap-2">
            عرض على الخريطة <i class="fas fa-arrow-left arrow-left"></i>
        </a>
    </div>
</div>

<style>
/* Arrow rotation for the left arrow */
.arrow-left {
    transform: rotate(145deg);
}
</style>