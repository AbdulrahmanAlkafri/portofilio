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
<div class="bg-white py-10">
    <div class="flex items-center justify-center min-h-screen w-full mx-auto bg-white my-16 py-12">
        <div class="p-6 w-4/5 mx-auto">
            <h2 class="text-5xl font-bold text-gray-600 mb-4 text-center" data-ar="استثمر الآن" data-en="Invest Now">
                استثمر الآن
            </h2>
            <p class="text-3xl font-semibold text-gray-500 tracking-wide leading-loose text-center mb-4"
                data-ar="نحن هنا نحتاج دعمك نحو النجاح. يرجى ملئ الإستمارة أدناه و سنتواصل معك قريبا لاستكشاف الفرص الإستثمارية و الشراكات الممكنة."
                data-en="We are here to seek your support towards success. Please fill out the form below, and we will contact you soon to explore investment opportunities and potential partnerships.">
                نحن هنا نحتاج دعمك نحو النجاح. يرجى ملئ الإستمارة أدناه و سنتواصل معك قريبا لاستكشاف الفرص الإستثمارية و
                الشراكات الممكنة
            </p>
            <form action="{{ route('invest') }}" method="POST" class="p-5 bg-white shadow-md rounded-lg w-4/5 mx-auto">
                @csrf
                <div class="mb-4 flex items-center justify-start">
                    <label for="name" class="block text-lg font-bold text-orange-400 mr-4 w-1/3" data-ar="الاسم"
                        data-en="Name">
                        الاسم
                    </label>
                    <input type="text" id="name" name="name"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" required>
                    @error('name')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-center">
                    <label for="phone" class="block text-lg font-bold text-orange-400 mr-4 w-1/3" data-ar="رقم الهاتف"
                        data-en="Phone Number">
                        رقم الهاتف
                    </label>
                    <input type="tel" id="phone" name="phone"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('phone') border-red-500 @enderror"
                        value="{{ old('phone') }}" required>
                    @error('phone')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-center">
                    <label for="company_name" class="block text-lg font-bold text-orange-400 mr-4 w-1/3"
                        data-ar="اسم الشركة" data-en="Company Name">
                        اسم الشركة
                    </label>
                    <input type="text" id="company_name" name="company_name"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('company_name') border-red-500 @enderror"
                        value="{{ old('company_name') }}" required>
                    @error('company_name')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-center">
                    <label for="company_type" class="block text-lg font-bold text-orange-400 mr-4 w-1/3"
                        data-ar="نوع الشركة" data-en="Company Type">
                        نوع الشركة
                    </label>
                    <select id="company_type" name="company_type"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('company_type') border-red-500 @enderror">
                        <option value="" data-ar="نوع الشركة" data-en="company type">
                            {{ old('company_type') ?: 'نوع الشركة' }}
                        </option>
                        <option value="نوع 1" {{ old('company_type') == 'نوع 1' ? 'selected' : '' }} data-ar="نوع 1"
                            data-en="Type 1">نوع 1</option>
                        <option value="نوع 2" {{ old('company_type') == 'نوع 2' ? 'selected' : '' }} data-ar="نوع 2"
                            data-en="Type 2">نوع 2</option>
                        <option value="نوع 3" {{ old('company_type') == 'نوع 3' ? 'selected' : '' }} data-ar="نوع 3"
                            data-en="Type 3">نوع 3</option>
                    </select>
                    @error('company_type')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-center">
                    <label for="country" class="block text-lg font-bold text-orange-400 mr-4 w-1/3" data-ar="الدولة"
                        data-en="Country">
                        الدولة
                    </label>
                    <select id="country" name="country"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('country') border-red-500 @enderror">
                        <option class="text-gray-600" value="" data-ar="الدولة" data-en="country">
                            {{ old('country') ?: 'الدولة' }}
                        </option>
                        <option value="دولة 1" {{ old('country') == 'دولة 1' ? 'selected' : '' }} data-ar="دولة 1"
                            data-en="Country 1">دولة 1</option>
                        <option value="دولة 2" {{ old('country') == 'دولة 2' ? 'selected' : '' }} data-ar="دولة 2"
                            data-en="Country 2">دولة 2</option>
                        <option value="دولة 3" {{ old('country') == 'دولة 3' ? 'selected' : '' }} data-ar="دولة 3"
                            data-en="Country 3">دولة 3</option>
                    </select>
                    @error('country')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-center">
                    <label for="message" class="block text-lg font-bold text-orange-400 mr-4 w-1/3" data-ar="رسالة"
                        data-en="Message">
                        رسالة
                    </label>
                    <textarea id="message" name="message"
                        class="mt-1 p-2 border outline-none rounded-md focus:ring-2 focus:ring-orange-500 flex-1 bg-gray-50 @error('message') border-red-500 @enderror"
                        rows="4">{{ old('message') }}</textarea>
                    @error('message')
                    <span class="text-red-500 text-sm mr-4">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="py-2 text-center w-1/2 mx-auto rounded-2xl bg-orange-500 text-orange-50 text-xl hover:bg-orange-600 transition font-semibold"
                        data-ar="تسجيل" data-en="Register">
                        تسجيل
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>