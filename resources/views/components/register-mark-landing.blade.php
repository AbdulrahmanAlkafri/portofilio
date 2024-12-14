<div class="flex items-center justify-center min-h-screen">
    <div class="flex justify-between overflow-hidden max-w-4xl">

        <!-- Right Side: Normal Text -->
        <div class="w-1/2 p-6 flex flex-col justify-center tracking-wide leading-loose">
            <h2 class="text-4xl font-bold text-gray-600" data-en="Register your trade mark now !"
                data-ar="سجل علامتك التجارية الآن"></h2>
            <p class="mt-2 text-3xl">
                <span data-en="Start your success with" data-ar="ابدأ نجاحك مع"></span>
                <span class="text-orange-500 font-bold" data-ar="كيتش بلس" data-en="Kitch Plus"></span>
                <span
                    data-en="Register your brand now to entrust us with managing your project with thoughtful steps, ensuring you excel in the world of restaurants."
                    data-ar="سجل علامتك التجارية الآن ودعنا نساعدك في إدارة مشروعك بخطوات مدروسة تضمن لك التفوق في عالم المطاعم."></span>
            </p>
        </div>

        <!-- Left Side: Main Image and Popup Text Images -->
        <div class="relative w-1/2 flex flex-col items-center">
            <img src="{{ asset('images/register-mark/register-mark-women.png') }}" alt="Woman Image"
                class="object-cover w-full h-auto">

            <div class="absolute flex flex-col items-center" style="top: 75%; left: 0; transform: translateY(-30%);">
                <!-- Left Popup Image (near chest) -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark1.png') }}" alt="Description 1"
                        class="object-cover rounded-full h-10">
                </div>
            </div>

            <div class="absolute right-0 flex flex-col items-center" style="top: 45%; right: 0;">
                <!-- Right Popup Image 1 -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark2.png') }}" alt="Description 2"
                        class="object-cover rounded-full h-10">
                </div>
                <!-- Right Popup Image 2 -->
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/register-mark/register-mark3.png') }}" alt="Description 3"
                        class="object-cover rounded-full h-10">
                </div>
            </div>
        </div>

    </div>
</div>