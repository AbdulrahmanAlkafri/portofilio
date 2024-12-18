<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="max-w-7xl w-full mx-auto flex flex-row">
        <!-- Left Side: Text Section -->
        <div class="w-1/2 flex flex-col justify-center p-6">
            <!-- Title -->
            <h2 class="text-5xl font-bold text-gray-600 mb-4" data-en="Register your trade mark now !"
                data-ar="سجل علامتك التجارية الآن"></h2>

            <!-- Description -->
            <p class="mt-2 text-3xl leading-relaxed">
                <span data-en="Start your success with" data-ar="ابدأ نجاحك مع"></span>
                <span class="text-orange-500 font-bold" data-ar="كيتش بلس" data-en="Kitch Plus"></span>
                <span
                    data-en="Register your brand now to entrust us with managing your project with thoughtful steps, ensuring you excel in the world of restaurants."
                    data-ar="سجل علامتك التجارية الآن ودعنا نساعدك في إدارة مشروعك بخطوات مدروسة تضمن لك التفوق في عالم المطاعم."></span>
            </p>
        </div>

        <!-- Right Side: Image Section -->
        <div class="relative w-1/2 flex flex-col items-center">
            <!-- Main Image of the Girl -->
            <img src="{{ asset('images/register-mark/register-mark-women.png') }}" alt="Woman Image"
                class="object-cover w-full h-auto rounded-md">

            <!-- Left Popup Image (near chest) -->
            <div class="absolute" style="top: 60%; left: 10%;">
                <img src="{{ asset('images/register-mark/register-mark1.png') }}" alt="Description 1"
                    class="object-cover rounded-full h-10">
            </div>

            <!-- Right Popup Images -->
            <div class="absolute flex flex-col items-center" style="top: 45%; right: 10%;">
                <img src="{{ asset('images/register-mark/register-mark2.png') }}" alt="Description 2"
                    class="object-cover rounded-full h-10 mb-2">
                <img src="{{ asset('images/register-mark/register-mark3.png') }}" alt="Description 3"
                    class="object-cover rounded-full h-10">
            </div>
        </div>
    </div>
</div>