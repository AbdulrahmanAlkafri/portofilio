
<footer class="py-10 mt-16">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-start px-4">
        <!-- Left Section -->
        <div class="md:w-1/3 mt-4 md:mt-0 text-center">
            <img id="logo" loading="lazy" src="{{asset('images/logo.png')}}" data-ar="{{asset('images/logo.png')}}"
                data-en="{{asset('images/en-logo.png')}}" alt="Logo" class="" />
            <h3 class="text-lg font-semibold mb-4" data-en="Subscribe to receive all the latest updates"
                data-ar="اشترك معنا ليصلك كل جديد">
                اشترك معنا ليصلك كل جديد
            </h3>
            <form action="#" method="POST" class="relative">
                <input type="email" id="emailInput" placeholder="اكتب بريدك الإلكتروني"
                    class="border outline-none ring-1 focus:ring-orange-600 border-gray-300 rounded-full pl-4 pr-14 py-2"
                    style="width: calc(100% - 14px);" data-en="Enter your email" data-ar="اكتب بريدك الإلكتروني" />
                <a type="submit" href="mailto:info@kitchplus.co"
                    class="cursor-pointer absolute left-1.5 top-0 h-full bg-orange-600 text-orange-50 rounded-full flex items-center justify-center px-3 transition duration-150 ease-in-out hover:bg-orange-700">
                    <span id="arrow" class="text-3xl font-bold m-auto mb-4">&#8592;</span> <!-- Left Arrow -->
                </a>
            </form>
        </div>

        <div class="flex justify-center items-center">
            <!-- Middle Section -->
            <div class="md:w-1/3 mb-4 md:mt-0 flex flex-col justify-start mx-10">
                <h2 class="text-orange-600 text-3xl font-semibold mb-4" data-en="Kitch Plus" data-ar="كيتش بلس">
                    كيتش بلس
                </h2>
                <p class="mb-2" data-en="About Us" data-ar="من نحن">من نحن</p>
                <p class="mb-2" data-en="Register Your Brand" data-ar="سجل علامتك التجارية">سجل علامتك التجارية</p>
                <p class="mb-2" data-en="Contact Us" data-ar="تواصل معنا">تواصل معنا</p>
                <p class="mb-2" data-en="Invest with Us" data-ar="استثمر معنا">استثمر معنا</p>
                <p class="mb-2" data-en="Our Platform" data-ar="منصتنا">منصتنا</p>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/3">
                <h2 class="text-orange-600 text-3xl font-semibold mb-4" data-en="Contact Us" data-ar="تواصل معنا">
                    تواصل معنا
                </h2>
                <p class="mb-2" data-en="+97433884773 📞" data-ar="+97433884773"><span>+97433884773</span><span
                        class="inline-block">📞</span></p>
                <p class="mb-2" data-en="info@andls.sa 📧" data-ar="info@andls.sa"><span>info@andls.sa</span><span
                        class="inline-block">📧</span></p>
                <p class="mb-2" data-en="King Abdullah II Street, Amman, Jordan 📍"
                    data-ar="شارع الملك عبد الله الثاني، عمان، الأردن">
                    <span>شارع الملك عبد الله الثاني، عمان، الأردن</span><span class="inline-block">📍</span>
                </p>
                <div class="flex mt-4 justify-start items-center">
                    <a href="https://www.facebook.com/profile.php?id=61557016907788&mibextid=ZbWKwL" target="_blank"
                        class="text-orange-600 hover:text-orange-700 m-4" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/kitchplus" target="_blank"
                        class="text-orange-600 hover:text-orange-700 m-4" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com/kitchplus" target="_blank"
                        class="text-orange-600 hover:text-orange-700 m-4" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/kitchplus/" target="_blank"
                        class="text-orange-600 hover:text-orange-700 m-4" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <p class="text-gray-600" data-en="All rights reserved to Kitch Plus &copy; {{ date('Y') }}"
            data-ar="جميع الحقوق محفوظة ل كيتش بلس &copy; {{ date('Y') }}">
            جميع الحقوق محفوظة ل <span class="text-orange-500">كيتش بلس</span> &copy; {{ date('Y') }}
        </p>
    </div>
</footer>

<script>
// Function to switch language  
function switchLanguage(lang) {
    const elements = document.querySelectorAll('[data-en], [data-ar]');
    if (lang === 'en') {
        elements.forEach(element => {
            if (element.dataset.en) {
                element.textContent = element.dataset.en;
            }
            if (element.placeholder) {
                element.placeholder = element.dataset.en; // Update placeholder  
            }
        });
        // Change arrow direction (optional)  
        document.getElementById('arrow').innerHTML = '&#8594;'; // Right Arrow  
    } else {
        elements.forEach(element => {
            if (element.dataset.ar) {
                element.textContent = element.dataset.ar;
            }
            if (element.placeholder) {
                element.placeholder = element.dataset.ar; // Update placeholder  
            }
        });
        // Revert arrow direction  
        document.getElementById('arrow').innerHTML = '&#8592;'; // Left Arrow  
    }
}

// Example usage: Switch to English (you might want to call this on a button click or language toggle)  
switchLanguage('en'); // or switchLanguage('ar') for Arabic  
switchLanguage('ar'); // or switchLanguage('ar') for Arabic  
</script>