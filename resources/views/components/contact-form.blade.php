@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = "{{ session('success') }}"; // Set the success message  
    toast.classList.remove('hidden'); // Show the toast  
    toast.classList.add('opacity-100'); // Make it visible  

    // Hide the toast after 3 seconds  
    setTimeout(() => {
        toast.classList.remove('opacity-100');
        toast.classList.add('hidden');
    }, 2000);
});
</script>
@endif
@if ($errors->any())
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    let errorMessage = "تعذر تسجيل الإستمارة";

    toastMessage.innerHTML = errorMessage; // Set the error message  
    toast.classList.remove('hidden'); // Show the toast  
    toast.classList.add('opacity-100'); // Make it visible  

    // Hide the toast after 3 seconds  
    setTimeout(() => {
        toast.classList.remove('opacity-100');
        toast.classList.add('hidden');
    }, 1500);
});
</script>
@endif

<div class="bg-white p-6">
    <h2 class="text-4xl font-bold text-gray-600 mb-4 text-center" data-ar="كن على تواصل معنا"
        data-en="Get in Touch with Us">
        كن على تواصل معنا
    </h2>
    <form action="{{ route('contacts.store') }}" method="POST" class="space-y-8">
        @csrf
        <div class="mb-4">
            <input type="text" name="name" id="name" placeholder="الاسم" data-ar="الاسم" data-en="Name"
                class="mt-1 block w-1/3 bg-gray-100 placeholder:text-black placeholder:text-sm mx-auto border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-orange-300"
                required>
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="text" name="phone_number" id="phone_number" placeholder="رقم الهاتف" data-ar="رقم الهاتف"
                data-en="Phone Number"
                class="mt-1 block w-1/3 bg-gray-100 placeholder:text-black placeholder:text-sm mx-auto border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-orange-300"
                required>
            @error('phone_number')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="email" name="email" id="email" placeholder="البريد الالكتروني" data-ar="البريد الالكتروني"
                data-en="Email"
                class="mt-1 block w-1/3 bg-gray-100 placeholder:text-black placeholder:text-sm mx-auto border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-orange-300"
                required>
            @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <textarea name="subject" id="subject" placeholder="رسالتك لنا" data-ar="رسالتك لنا" data-en="Your Message"
                class="mt-1 block w-1/3 bg-gray-100 placeholder:text-black placeholder:text-sm mx-auto border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-orange-300"
                required></textarea>
            @error('subject')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="block w-1/3 mx-auto font-bold bg-orange-500 py-2 text-orange-50 rounded-md hover:bg-orange-600"
            data-ar="ارسال الرساله" data-en="Send Message">
            ارسال الرساله
        </button>
    </form>
</div>