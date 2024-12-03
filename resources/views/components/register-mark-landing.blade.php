<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex overflow-hidden max-w-4xl">

        <!-- Right Side: Normal Text -->
        <div class="w-1/2 p-6 flex flex-col justify-center">
            <!-- Added flex and justify-center to align text -->
            <h2 class="text-4xl font-bold text-gray-600">سجل علامتك التجارية الآن</h2>
            <p class="mt-2 text-3xl">ابدأ نجاحك مع <span class="text-orange-500 font-bold">كيتش بلس</span>
                سجل
                علامتك
                التجارية الآن ودعنا نساعدك في
                إدارة مشروعك
                بخطوات مدروسة تضمن لك التفوق في عالم المطاعم</p>
        </div>

        <!-- Left Side: Main Image and Popup Text Images -->
        <div class="relative w-1/2 flex flex-col items-center">
            <img src="{{ asset('images/register-mark/register-mark-women.png') }}" alt="Woman Image"
                class="object-cover w-full h-auto">

            <div class="absolute flex flex-col items-center" style="top: 75%; left: 0; transform: translateY(-30%);">
                <!-- Left Popup Image (near chest) -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark1.png') }}" alt="Description 1"
                        class="object-cover rounded-full h-10"> <!-- Set size to 10x10 -->
                </div>
            </div>

            <div class="absolute right-0 flex flex-col items-center" style="top: 45%; right: 0;">
                <!-- Adjusted top for alignment -->
                <!-- Right Popup Image 1 -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark2.png') }}" alt="Description 2"
                        class="object-cover rounded-full h-10"> <!-- Set size to 10x10 -->
                </div>
                <!-- Right Popup Image 2 -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark3.png') }}" alt="Description 3"
                        class="object-cover rounded-full h-10"> <!-- Set size to 10x10 -->
                </div>
            </div>
        </div>

    </div>
</div>