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
<div class="flex items-center justify-center min-h-screen mt-10">
    <div class="w-full p-6">
        <div class="w-4/5 mx-auto">
            <h2 class="text-center text-4xl font-bold mb-8 text-gray-600" data-en="Fill out this register form"
                data-ar="املأ استمارة التسجيل">
            </h2>
            <p class="text-2xl tracking-wide text-center font-semibold mb-10"
                data-ar="نحن هنا لمساعدتك في بدء رحلتك نحو النجاح. املأ الاستمارة أدناه، وسنتواصل معك قريبًا لمناقشة تفاصيل مشروعك"
                data-en="We are here to help you start your journey to success. Fill out the form below, and we will contact you shortly to discuss the details of your project">
            </p>
        </div>

        <form action="{{ route('register-mark') }}" method="POST" class="w-3/5 mx-auto">
            @csrf

            <div class="mb-4 flex items-center">
                <label for="name" class="block text-lg font-bold text-orange-500 mr-4 w-1/3" data-en="Name"
                    data-ar="الاسم">
                </label>
                <input type="text" id="name" name="name"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <label for="phone" class="block text-lg font-bold text-orange-500 mr-4 w-1/3" data-en="Phone Number"
                    data-ar="رقم الهاتف">
                </label>
                <input type="tel" id="phone" name="phone"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('phone') border-red-500 @enderror"
                    value="{{ old('phone') }}" required>
                @error('phone')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <label for="trademark_name" class="block text-lg font-bold text-orange-500 mr-4 w-1/3"
                    data-en="Trademark Name" data-ar="اسم العلامة التجارية">
                </label>
                <input type="text" id="trademark_name" name="trademark_name"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('trademark_name') border-red-500 @enderror"
                    value="{{ old('trademark_name') }}" required>
                @error('trademark_name')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <label for="trademark_type" class="block text-lg font-bold text-orange-500 mr-4 w-1/3"
                    data-en="Trademark Type" data-ar="نوع العلامة التجارية">
                </label>
                <select id="trademark_type" name="trademark_type"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('trademark_type') border-red-500 @enderror">
                    <option value="">{{ old('trademark_type') ?: 'اختر...' }}</option>
                    <option value="نوع 1" {{ old('trademark_type') == 'نوع 1' ? 'selected' : '' }}>نوع 1</option>
                    <option value="نوع 2" {{ old('trademark_type') == 'نوع 2' ? 'selected' : '' }}>نوع 2</option>
                    <option value="نوع 3" {{ old('trademark_type') == 'نوع 3' ? 'selected' : '' }}>نوع 3</option>
                </select>
                @error('trademark_type')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <label for="country" class="block text-lg font-bold text-orange-500 mr-4 w-1/3" data-en="Country"
                    data-ar="الدولة">
                </label>
                <select id="country" name="country"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('country') border-red-500 @enderror">
                    <option value="">{{ old('country') ?: 'اختر...' }}</option>
                    <option value="دولة 1" {{ old('country') == 'دولة 1' ? 'selected' : '' }}>دولة 1</option>
                    <option value="دولة 2" {{ old('country') == 'دولة 2' ? 'selected' : '' }}>دولة 2</option>
                    <option value="دولة 3" {{ old('country') == 'دولة 3' ? 'selected' : '' }}>دولة 3</option>
                </select>
                @error('country')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <label for="notes" class="block text-lg font-bold text-orange-500 mr-4 w-1/3" data-en="Notes"
                    data-ar="ملاحظات">
                </label>
                <textarea id="notes" name="notes"
                    class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 @error('notes') border-red-500 @enderror"
                    rows="4">{{ old('notes') }}</textarea>
                @error('notes')
                <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="w-fit py-3 px-24 rounded-full bg-orange-500 text-orange-50 text-xl hover:bg-orange-600 transition"
                    data-en="Register" data-ar="تسجيل">
                    تسجيل
                </button>
            </div>
        </form>
    </div>
</div>