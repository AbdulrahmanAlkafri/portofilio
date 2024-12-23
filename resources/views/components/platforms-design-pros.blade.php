@php
$bullets1 = [
['text' => 'واجهة مستخدم سهلة الاستخدام', 'en' => 'Easy-to-use interface'], // Easy-to-use interface
['text' => 'تصميم عصري', 'en' => 'Modern design'], // Modern design
['text' => 'أداء سريع', 'en' => 'Fast performance'], // Fast performance
['text' => 'توافق عبر الأجهزة', 'en' => 'Cross-device compatibility'], // Cross-device compatibility
];
$bullets2 = [
['text' => 'ادارة المطعم عن بعد', 'en' => 'Remote restaurant management'], // Remote restaurant management
['text' => 'ربط فوري بشركات التوصيل', 'en' => 'Instant connection to delivery companies'], // Instant connection to
['text' => 'ادارة متقدمة للمخزون', 'en' => 'Advanced inventory management'], // Advanced inventory management
['text' => 'تسويق سريع وسهل', 'en' => 'Quick and easy marketing'], // Quick and easy marketing
['text' => 'تحليل متقدم للبيانات', 'en' => 'Advanced data analysis'], // Advanced data analysis
];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 p-3 w-full">
    <!-- Right Side: Bullet Points -->
    <div class="w-full md:w-2/3 space-y-4 m-auto">
        <p class="text-5xl py-9 font-bold text-gray-600" data-en="Design Features" data-ar="مميزات التصميم">
        </p>
        <ul class="list-disc pl-5 space-y-2 text-nowrap">
            @foreach ($bullets1 as $bullet)
            <li class="flex items-center text-xl my-2 py-2">
                <!-- Changed to text-xl for smaller text -->
                <div class="w-2 h-2 m-2 bg-orange-500 rounded-full mr-2 p-2"></div> <!-- Reduced bullet size -->
                <span data-en="{{ $bullet['en'] }}" data-ar="{{ $bullet['text'] }}"
                    class="whitespace-nowrap text-2xl font-semibold tracking-wide">
                    {{ $bullet['text'] }} ({{ $bullet['en'] }})
                </span> <!-- Added whitespace-nowrap to prevent line breaks -->
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Left Side: Image -->
    <div class="w-full">
        <img src="{{ asset('images/platforms/design-pros.png') }}" alt="Chart Orders" class="w-full">
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 p-6 w-full">
    <!-- Left Side: Image -->
    <div class="w-full">
        <img src="{{ asset("images/platforms/platform-pros.png") }}" alt="Chart Orders" class="w-full">
    </div>
    <!-- Right Side: Bullet Points -->
    <div class="w-full md:w-1/3 space-y-4 m-auto">
        <p class="text-5xl py-9 font-bold text-gray-600" data-en="Platform Features" data-ar="مميزات المنصة">
        </p>
        <ul class="list-disc pl-5 space-y-2 text-3xl">
            @foreach ($bullets2 as $bullet)
            <li class="flex items-center text-xl my-2 py-1.5">
                <!-- Changed to text-xl for smaller text -->
                <div class="w-2 h-2 m-2 bg-orange-500 rounded-full mr-2 p-2"></div> <!-- Reduced bullet size -->
                <span data-en="{{ $bullet['en'] }}" data-ar="{{ $bullet['text'] }}"
                    class="whitespace-nowrap text-2xl font-semibold tracking-wide">
                    {{ $bullet['text'] }} ({{ $bullet['en'] }})
                </span> <!-- Added whitespace-nowrap to prevent line breaks -->
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="w-full h-40 bg-white">

</div>