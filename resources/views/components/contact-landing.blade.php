<div class="flex items-center justify-center gap-x-3 p-6">
    <!-- Right Section -->
    <div class="flex flex-col ml-6 w-1/2 mx-auto">
        <h1 class="text-gray-600 text-5xl tracking-wide leading-loose font-bold"
            data-en="Contact us and start developing your project" data-ar="تواصل معنا وابدأ في تطوير مشروعك">
            تواصل معنا وابدأ في تطوير مشروعك
        </h1>
        <p class="text-black text-3xl tracking-wide leading-loose mt-2 font-semibold"
            data-en="We are here to support you every step of the way. Whether you are looking for advice, magic solutions, or even advertising for your inquiries, our team is ready to help"
            data-ar="نحن هنا لدعمك في كل خطوة. سواء كنت تبحث عن استشارات، حلول مبتكرة، أو حتى إجابات لاستفساراتك، فريقنا جاهز لمساعدتك">
            نحن هنا للمساعدة
        </p>
    </div>
    <!-- Left Section -->
    <div class="flex items-center relative mx-auto">
        <img src="{{ asset('images/contact/contact-person-image.png') }}" alt="Person"
            class="object-cover rounded-full">
        <div class="ml-4 absolute top-[20%] left-0 w-52 p-4 bg-white shadow-lg rounded-lg flex flex-col items-start">
            <!-- Changed to items-start -->
            <div class="space-y-3 mb-2 block">
                <i class="fas fa-headphones text-orange-400"></i>
                <div>
                    <span class="text-orange-400 text-sm font-bold" data-en="we are here to help"
                        data-ar="نحن هنا لمساعدتك"></span>
                    <p class="text-[10px]"
                        data-en="Contact us for any inquiries or support, our team is ready to provide the solutions you need"
                        data-ar="تواصل معنا لأي استفسار أو دعم، فريقنا جاهز لتقديم الحلول التي تحتاجها"></p>
                </div>
            </div>
        </div>
        <div class="mr-2 w-full">
            <img src="{{asset("images/contact/gmail.png")}}" alt="WhatsApp"
                class="w-[100px] absolute bottom-1/3 left-0 h-auto">
        </div>
        <!-- <a href="mailto:your-email@example.com">
            <img src="path/to/email-icon.png" alt="Email" class="w-8 h-8">
        </a> -->
    </div>
</div>