<div class="py-10 w-full flex flex-col lg:flex-row items-center justify-evenly mr-20">
    <div class="lg:w-1/2 lg:pl-8">
        <h2 class="text-xl font-bold m-7 text-gray-600">ماذا نقدم؟</h2>
        <p class=" m-7 text-2xl">
            مع <span class="text-orange-600 font-bold">كيتش بلش</span>، يمكنك تحقيق حلمك بسرعة وسهولة! نوفر لك جميع
            الدعم من
            الخبرة
            إلى التوسع في
            الإيرادات. نوصل
            منتجاتك لأماكن أكثر، نقدم لك توسع بعلامتك التجارية في أي منطقة بأفضل المزایا وجودة عالية.
        </p>
        <button
            class="bg-orange-500 rounded-full m-7 text-white font-bold py-2 px-4 hover:bg-orange-600 transition duration-200">
            قراءة المزيد
        </button>
    </div>
    <div class="lg:w-1/2 relative mb-8 lg:mb-0">
        <img src="{{ asset('images/our-offer/women.png') }}" alt="Woman" class="h-auto w-fit rounded-lg" />

        <div class="relative -top-80 -right-56">
            <!-- Position for the images to the left of the woman -->
            <div class="flex flex-col items-center absolute top-10 left-0">
                <img src="{{ asset('images/our-offer/our-offer-1.png') }}" alt="Question 1" class="mb-2 w-32 lg:w-36" />
                <img src="{{ asset('images/our-offer/our-offer-2.png') }}" alt="Question 2"
                    class="mt-2 mb-4 w-32 lg:w-36" />
            </div>

            <!-- Position for the images to the right of the woman -->
            <div class="flex flex-col items-center top-10 right-0">
                <img src="{{ asset('images/our-offer/our-offer-3.png') }}" alt="Question 3" class="mb-2 w-32 lg:w-36" />
                <img src="{{ asset('images/our-offer/our-offer-4.png') }}" alt="Question 4" class="mt-2" />
            </div>
        </div>
    </div>

</div>