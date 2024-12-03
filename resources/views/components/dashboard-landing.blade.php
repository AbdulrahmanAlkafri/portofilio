<section class="relative bg-white py-20">
    <div class="container mx-auto flex flex-col items-center relative z-20">
        <img loading="lazy" src="{{ asset('images/main-dashboard.png') }}" alt="Dashboard"
            class="w-full max-w-2xl z-20 relative" />
    </div>

    <div class="absolute inset-0 flex justify-between items-center z-0">
        <img loading="lazy" src="{{ asset('images/right-dashboard.png') }}" alt="Left Background"
            class="w-1/3 object-cover opacity-60 -translate-x-1/4 md:-translate-x-1/2" />

        <img loading="lazy" src="{{ asset('images/left-dashboard.png') }}" alt="Right Background"
            class="w-1/3 object-cover opacity-60 translate-x-1/4 md:translate-x-1/2" />
    </div>
</section>