<nav class="bg-orange-50 shadow-md">
    <div class="max-w-full mx-auto px-2 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <img loading="lazy" src="{{ asset("images/logo.png") }}" alt="Logo" class="h-8">
        </div>

        <!-- Nav Links -->
        <div class="flex-grow flex justify-center gap-x-1 space-x-4">
            <a href="{{ route('home') }}"
                class="px-2 nav-item {{ request()->is('/') ? 'text-orange-500 font-bold' : 'text-gray-800' }}">الرئيسية</a>
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
        <div class="flex items-center space-x-4">
            <a href="{{ route('contact') }}"
                class="mx-3 bg-orange-500 text-orange-50 hover:bg-orange-600 font-bold p-2 rounded-full">تواصل
                معنا</a>
            <label for="toggleTwo" class="flex items-center cursor-pointer select-none text-dark dark:text-orange-50">
                <div class="relative">
                    <input type="checkbox" id="toggleTwo" class="peer sr-only" />

                    <!-- Background for the switch -->
                    <div
                        class="block h-8 rounded-full bg-gray-300 w-14 peer-checked:bg-orange-500 transition-all duration-300">
                    </div>

                    <!-- Dot for the switch -->
                    <div
                        class="absolute w-6 h-6 transition bg-orange-50 rounded-full dot dark:bg-dark-4 left-1 top-1 peer-checked:translate-x-full peer-checked:bg-orange-50">
                    </div>

                    <!-- Text when off, positioned left -->
                    <span
                        class="text-center font-extrabold mx-auto text-sm absolute right-1 top-1 text-orange-500 transition-opacity duration-300 peer-checked:opacity-0">En</span>
                    <!-- Text when on, positioned right -->
                    <span
                        class="text-center font-extrabold text-sm absolute left-1 top-1 text-orange-50 transition-opacity duration-300 peer-checked:opacity-100">ع</span>
                </div>
            </label>
        </div>
    </div>
</nav>

<style>
#language-toggle:checked~.toggle-circle {
    transform: translateX(100%);
}

#language-toggle:checked~.toggle-path {
    background-color: #ff9800;
}
</style>

<script>
document.getElementById('language-toggle').addEventListener('change', function() {
    alert('Language switched! (Implement actual logic here)');
});
</script>