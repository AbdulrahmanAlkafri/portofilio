<footer class="py-10 mt-auto">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-start px-4">
        <!-- Left Section -->
        <div class="md:w-1/3 mt-4 md:mt-0 text-center">
            <img src="{{ asset("images/footer-image.png") }}" alt="Description of image" class="mx-auto mb-2 h-auto" />
            <h3 class="text-lg font-semibold mb-4">اشترك معنا ليصلك كل جديد</h3>
            <form action="#" method="POST" class="relative">
                <input type="email" placeholder="اكتب بريدك الإلكتروني"
                    class="border outline-none ring-1 focus:ring-orange-600 border-gray-300 rounded-full pl-4 pr-14 py-2"
                    style="width: calc(100% - 14px);" />
                <button type="submit"
                    class="absolute left-1.5 top-0 h-full bg-orange-600 text-orange-50 rounded-full flex items-center justify-center px-3 transition duration-150 ease-in-out hover:bg-orange-700">
                    <span class="text-4xl font-bold mx-auto mb-4">&#8592;</span> <!-- Left Arrow -->
                </button>
            </form>
        </div>
        <div class="flex justify-center items-center">
            <!-- Middle Section -->
            <div class="md:w-1/3 mb-4 md:mt-0 flex flex-col justify-start mx-10">
                <h2 class="text-orange-600 text-3xl font-semibold mb-4">كيتش بلس</h2>
                <p class="mb-2">من نحن</p>
                <p class="mb-2">سجل علامتك التجارية</p>
                <p class="mb-2">تواصل معنا</p>
                <p class="mb-2">استثمر معنا</p>
                <p class="mb-2">منصتنا</p>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/3">
                <h2 class="text-orange-600 text-3xl font-semibold mb-4">تواصل معنا</h2>
                <p class="mb-2">01122336699 <span class="inline-block">📞</span></p>
                <p class="mb-2">info@andls.sa <span class="inline-block">📧</span></p>
                <p class="mb-2">شارع الملك عبد الله الثاني، عمان، الأردن <span class="inline-block">📍</span></p>
                <div class="flex mt-4 justify-start items-center">
                    <a href="#" class="text-orange-600 hover:text-orange-700 m-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-orange-600 hover:text-orange-700 m-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-orange-600 hover:text-orange-700 m-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-orange-600 hover:text-orange-700 m-4">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <p class="text-gray-600">
            جميع الحقوق محفوظة ل <span class="text-orange-500">كيتش بلس</span> &copy;
            {{ date('Y') }}</p>
    </div>
</footer>