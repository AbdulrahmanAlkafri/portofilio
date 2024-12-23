<div class="relative flex justify-center items-center h-screen bg-gradient-to-b from-white to-orange-50">
    {{-- Parent Container for Big and Child Images --}}
    <div class="relative">
        {{-- Big Image --}}
        <img src="{{ asset('images/main-dashboard.png') }}" alt="Big Image" class="w-full z-10 relative"
            style=" height: auto;" />
        {{-- Left Child Image --}}
        <img src="{{ asset('images/left-dashboard.png') }}" alt="Left Image"
            class="absolute -left-[15%] top-[71%] transform -translate-x-1/4 -translate-y-1/2 opacity-75 z-0"
            style="height: auto;" />

        {{-- Right Child Image --}}
        <img src="{{ asset('images/right-dashboard.png') }}" alt="Right Image"
            class="absolute -right-[15%] top-[65%] transform translate-x-1/4 -translate-y-1/2 opacity-75 z-0"
            style="height: auto;" />
    </div>
</div>