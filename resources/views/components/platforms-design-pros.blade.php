@php
$bullets1 = [
'واجهة مستخدم سهلة الاستخدام',
'تصميم عصري',
'أداء سريع',
'توافق عبر الأجهزة',
];
$bullets2 =[
'ادارة المطعم عن بعد',
'ربط فوري بشركات التوصيل',
'ادارة متقدمة للمخزون',
'تسويق سريع وسهل',
'تحليل متقدم للبيانات',
];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 p-6 w-4/5 mx-auto">
    <!-- Right Side: Bullet Points -->
    <div class="w-full md:w-2/3 space-y-4 m-auto">
        <p class="text-4xl font-bold text-gray-600">ميزات التصميم</p>
        <ul class="list-disc pl-5 space-y-2">
            @foreach ($bullets1 as $bullet)
            <li class="flex items-center text-2xl my-3">
                <div class="w-2.5 h-2.5 m-2 bg-orange-500 rounded-full mr-2"></div>
                {{ $bullet }}
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Left Side: Image -->
    <div class="w-full md:ml-6">
        <img src="{{ asset('images/platforms/design-pros.png') }}" alt="Chart Orders" class="w-full md:w-3/4 h-auto">
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 p-6 w-full">
    <!-- Left Side: Image -->
    <div class="md:ml-6 w-2/3 mx-auto">
        <img src="{{ asset("images/platforms/platform-pros.png") }}" alt="Chart Orders" class="w-full md:w-3/4 h-auto">
    </div>
    <!-- Right Side: Bullet Points -->
    <div class="w-full md:w-1/3 space-y-4 m-auto">
        <p class="text-4xl font-bold text-gray-600">ميزات المنصة</p>
        <ul class="list-disc pl-5 space-y-2">
            @foreach ($bullets2 as $bullet)
            <li class="flex items-center text-2xl my-3">
                <div class="w-2.5 h-2.5 m-2 bg-orange-500 rounded-full mr-2"></div>
                {{ $bullet }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="w-full h-40 bg-white">

</div>