<!-- resources/views/components/accordion.blade.php -->
<div class="bg-white py-12">
    <div x-data="{ openIndex: null }" class="w-3/4 mx-auto my-8 bg-white">
        <h1 class="text-4xl font-bold text-gray-600 text-center mb-8" data-ar="الأسئلة الشائعة"
            data-en="Frequently Asked Questions">الأسئلة الشائعة</h1>
        @foreach($questions as $index => $question)
        <div class="bg-gray-100 rounded-lg border border-gray-200 mb-10">
            <div @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
                class="flex justify-between items-center p-4 cursor-pointer transition duration-300 ease-in-out hover:bg-gray-100 rounded-t-lg">
                <h2 class="text-2xl font-medium">
                    <span class="text-orange-600 text-2xl mx-2">{{ sprintf('%02d', $index + 1) }}</span>
                    <span data-ar="{{ $question['question_ar'] }}" data-en="{{ $question['question_en'] }}">
                    </span>
                </h2>
                <svg class="w-6 h-6 transform transition-transform" :class="{'rotate-180': openIndex === {{ $index }}}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div x-show="openIndex === {{ $index }}" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-y-0"
                x-transition:enter-end="opacity-100 transform scale-y-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-y-100"
                x-transition:leave-end="opacity-0 transform scale-y-0" class="p-4 rounded-b-lg text-2xl">
                <span data-ar="{{ $question['answer_ar'] }}" data-en="{{ $question['answer_en'] }}">

                </span>
            </div>
        </div>
        @endforeach
    </div>
</div>