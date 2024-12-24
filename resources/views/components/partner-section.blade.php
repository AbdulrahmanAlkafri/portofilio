<div class="py-10 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl text-center font-bold text-gray-600 mb-4" data-en="Success Partners" data-ar="شركاء النجاح">
            شركاء النجاح
        </h2>
        <div class="overflow-hidden relative">
            <div class="flex animate-scroll">
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset("images/success-partner/success-partner1.jpg") }}" alt="Partner 1"
                        class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset("images/success-partner/success-partner2.jpg") }}" alt="Partner 2"
                        class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner3.png') }}" alt="Partner 3" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner4.png') }}" alt="Partner 4" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner5.png') }}" alt="Partner 5" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner6.png') }}" alt="Partner 6" class="h-24 object-contain" />
                </div>
                <!-- Repeat for continuous effect -->
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset("images/success-partner/success-partner1.jpg") }}" alt="Partner 1"
                        class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset("images/success-partner/success-partner2.jpg") }}" alt="Partner 2"
                        class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner3.png') }}" alt="Partner 3" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner4.png') }}" alt="Partner 4" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner5.png') }}" alt="Partner 5" class="h-24 object-contain" />
                </div>
                <div class="flex-shrink-0 mx-4">
                    <img src="{{ asset('images/partner6.png') }}" alt="Partner 6" class="h-24 object-contain" />
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes scroll {
    0% {
        transform: translateX(100%);
        /* Start from the right */
    }

    100% {
        transform: translateX(-100%);
        /* Move to the left */
    }
}

.animate-scroll {
    animation: scroll 20s linear infinite;
    /* Adjust duration for scrolling speed */
    display: flex;
    white-space: nowrap;
    /* Prevent line breaks */
}

.overflow-hidden {
    width: 100%;
    /* Container width */
}
</style>