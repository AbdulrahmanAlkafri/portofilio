<nav>
    <div class="max-w-full mx-auto px-4 py-4 flex items-center justify-evenly">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img loading="lazy" src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
        </div>

        <!-- Nav Links -->
        <div class="flex-grow flex justify-center gap-x-10">
            <a href="{{ route('home') }}"
                class="nav-item {{ request()->is('/') ? 'text-orange-500 font-bold' : 'text-gray-800' }}">الرئيسية</a>
            <a href="{{ route('register-mark') }}"
                class="nav-item {{ request()->is('register-mark') ? 'text-orange-500 font-bold' : 'text-gray-800' }}">سجل
                علامتك التجارية</a>
            <a href="{{ route('invest') }}"
                class="nav-item {{ request()->is('invest') ? 'text-orange-500 font-bold' : 'text-gray-800' }}">استثمر
                معنا</a>
            <a href="{{ route('platforms') }}"
                class="nav-item {{ request()->is('platforms') ? 'text-orange-500 font-bold' : 'text-gray-800' }}">منصاتنا</a>
        </div>

        <!-- Contact Us Link and Language Switcher -->
        <div class="flex items-center gap-x-4">
            <label for="language-toggle" class="flex items-center cursor-pointer select-none">
                <div class="relative">
                    <input type="checkbox" id="language-toggle" class="sr-only peer" />
                    <div
                        class="block w-16 h-8 rounded-full bg-gray-200 peer-checked:bg-orange-500 transition-all duration-300">
                    </div>
                    <div
                        class="absolute w-7 h-7 bg-white rounded-full left-1 top-0.5 transition-transform peer-checked:translate-x-8">
                    </div>
                    <span
                        class="text-sm font-bold text-gray-800 absolute right-2 top-1 transition-opacity duration-300 peer-checked:opacity-0">EN</span>
                    <span
                        class="text-sm font-bold text-orange-500 absolute left-2 top-1 transition-opacity duration-300 peer-checked:opacity-100">ع</span>
                </div>
            </label>
            <a href="{{ route('contact') }}"
                class="bg-orange-500 text-white hover:bg-orange-600 font-bold py-1 px-8 rounded-full">تواصل
                معنا</a>
        </div>
    </div>
</nav>

<script>
document.getElementById('language-toggle').addEventListener('change', function() {
    if (this.checked) {
        // Switch to Arabic logic (you may want to implement your actual logic here)  
    } else {
        // Switch to English logic  
    }
});
</script>