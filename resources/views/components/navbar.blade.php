<nav>
    <div class="max-w-full mx-auto px-4 py-4 flex items-center justify-evenly">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img id="logo" loading="lazy" src="{{asset("images/logo.png")}}" data-ar="{{asset("images/logo.png")}}"
                data-en="{{asset("images/en-logo.png")}}" alt="Logo" class="h-8">
        </div>

        <!-- Nav Links -->
        <div class="flex-grow flex justify-center gap-x-10">
            <a href="{{ route('home') }}"
                class="nav-item {{ request()->is('/') ? 'text-orange-500 font-bold' : 'text-gray-800' }}"
                data-ar="الرئيسية" data-en="Home"></a>
            <a href="{{ route('register-mark') }}"
                class="nav-item {{ request()->is('register-mark') ? 'text-orange-500 font-bold' : 'text-gray-800' }}"
                data-ar="سجل علامتك التجارية" data-en="Register Your Trademark"></a>
            <a href="{{ route('invest') }}"
                class="nav-item {{ request()->is('invest') ? 'text-orange-500 font-bold' : 'text-gray-800' }}"
                data-ar="استثمر معنا" data-en="Invest with Us"></a>
            <a href="{{ route('platforms') }}"
                class="nav-item {{ request()->is('platforms') ? 'text-orange-500 font-bold' : 'text-gray-800' }}"
                data-ar="منصاتنا" data-en="Our Platforms"></a>
        </div>

        <!-- Contact Us Link and Language Switcher -->
        <div class="flex items-center gap-x-4">
            <label for="language-toggle" class="flex items-center cursor-pointer select-none">
                <div class="relative">
                    <input type="checkbox" id="language-toggle" class="sr-only peer" />
                    <div class="w-20 h-10 rounded-full bg-orange-500 transition-colors duration-300 flex items-center">
                        <!-- Language Indicators -->
                        <span
                            class="flex items-center justify-center w-1/2 h-full text-sm font-bold transition-opacity duration-300 peer-checked:opacity-0">
                            EN
                        </span>
                        <span
                            class="flex items-center justify-center w-1/2 h-full text-sm font-bold transition-opacity duration-300 peer-checked:opacity-100">
                            ع
                        </span>
                        <div
                            class="absolute w-8 h-8 bg-white rounded-full left-1 top-1 transition-transform duration-300 peer-checked:translate-x-14 flex items-center justify-center">
                            <span id="lang_circle" class="text-orange-500"></span>
                        </div>
                    </div>
                </div>
            </label>
            <a href="{{ route('contact') }}" data-ar="تواصل معنا" data-en="Contact Us"
                class="bg-orange-500 text-white hover:bg-orange-600 font-bold py-1 px-8 rounded-full">تواصل
                معنا</a>
        </div>
    </div>
</nav>
<script>
if (sessionStorage.getItem("dir") == "rtl") {
    document.getElementById("language-toggle").checked = true; // Set the toggle to checked  
    document.getElementById("lang_circle").textContent = "ع"; // Set to Arabic  
} else {
    document.getElementById("lang_circle").textContent = "EN"; // Set to English  
}
</script>