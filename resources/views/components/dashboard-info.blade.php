{{-- resources/views/components/dashboard-info.blade.php --}}

<div class="py-10 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-14 items-center tracking-wide leading-loose">
        <!-- Right Side: Image -->
        <div class="relative">
            <img loading="lazy" src="{{ asset('images/dashboard-info.png') }}" alt="Dashboard" class="w-full h-auto" />
            <x-text-frame class="absolute text-xl font-bold p-3 px-4 -left-[5%] bottom-[5%]" data-ar="منصاتنا"
                data-en="Our platfroms">
            </x-text-frame>
        </div>
        <!-- Left Side: Text and Paragraphs -->
        <div class="text-right">
            <h2 class="text-5xl font-bold text-gray-600 mb-4"
                data-en="Discover how to enhance your efficiency with our integrated system"
                data-ar="اكتشف كيف تعزّز كفاءتك مع نظامنا المتكامل">
                اكتشف كيف تعزّز كفاءتك مع نظامنا المتكامل
            </h2>
            <p class="text-3xl font-semibold mb-4 tracking-wide leading-loose text-wrap"
                data-en="Discover effective ways to enhance your operations' efficiency and increase your profits with our integrated system."
                data-ar="اكتشف الطرق الفعّالة لتعزيز كفاءة عملياتك وزيادة أرباحك مع نظامنا المتكامل.">
                اكتشف الطرق الفعّالة لتعزيز كفاءة عملياتك وزيادة أرباحك مع نظامنا المتكامل.
            </p>
            <div class="flex justify-start">
                <a href="#"
                    class="bg-orange-500 text-white font-bold py-4 px-16 rounded-2xl hover:bg-orange-400 transition"
                    data-en="View More" data-ar="عرض المزيد">
                    عرض المزيد
                </a>
            </div>
        </div>
    </div>
</div>