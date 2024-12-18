<!-- <section class="relative bg-white py-20">
    <div class="container mx-auto flex flex-col items-center relative z-20">
        <img loading="lazy" src="{{ asset('images/main-dashboard.png') }}" alt="Dashboard"
            class="w-full max-w-2xl relative" />
    </div>

    <div class="absolute inset-0 flex justify-between items-center">
        <img loading="lazy" src="{{ asset('images/right-dashboard.png') }}" alt="Left Background"
            class="w-1/3 object-cover opacity-60 -translate-x-1/4 md:-translate-x-1/2" />

        <img loading="lazy" src="{{ asset('images/left-dashboard.png') }}" alt="Right Background"
            class="w-1/3 object-cover opacity-60 translate-x-1/4 md:translate-x-1/2" />
    </div>
</section> -->
<div class="relative flex justify-center items-center h-screen">
    {{-- Parent Container for Big and Child Images --}}
    <div class="relative">
        {{-- Big Image --}}
        <img src="{{ asset('images/main-dashboard.png') }}" alt="Big Image" class="w-full z-10 relative"
            style=" height: auto;" />
        {{-- Left Child Image --}}
        <img src="{{ asset('images/left-dashboard.png') }}" alt="Left Image"
            class="absolute -left-[15%] top-3/4 transform -translate-x-1/4 -translate-y-1/2 opacity-75 z-0"
            style="height: auto;" />

        {{-- Right Child Image --}}
        <img src="{{ asset('images/right-dashboard.png') }}" alt="Right Image"
            class="absolute -right-[15%] top-3/4 transform translate-x-1/4 -translate-y-1/2 opacity-75 z-0"
            style="height: auto;" />
    </div>
</div>