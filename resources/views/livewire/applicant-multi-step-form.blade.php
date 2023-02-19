<div class="d-flex applicant-container">
    <div class="basis-11/12 applicant-content pr-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500">
        <div class="w-full bg-white relative">
            <div class="w-11/12">
                <div class="border-b-2 pl-3 flex gap-2 py-3 pb-4 flex-wrap navigation-top">
                    <span class="!text-xs uppercase font-bold text-pink-400 ">personal info</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">Job Preference</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">LANGUAGE</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">education</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">VOCATIONAL</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">work EXPERIENCE</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">OTHER SKILLS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">AUTHORIZATION</span>
                </div>
                <div class="px-3">
                    <form action="">
                        {{-- First Step --}}
                        @include('applicant.step1')

                        {{-- 2nd Step --}}
                        @include('applicant.step2')

                        {{-- 3rd Step --}}
                        @include('applicant.step3')

                        {{-- 4th Step --}}
                        @include('applicant.step4')

                        {{-- 5th Step --}}
                        @include('applicant.step5')

                        {{-- 6th Step --}}
                        @include('applicant.step6')

                        {{-- 7th Step --}}
                        @include('applicant.step7')

                        {{-- 8th Step --}}
                        @include('applicant.step8')

                        {{-- 9th Step --}}
                        @include('applicant.step9')

                        {{-- 10th Step --}}
                        @include('applicant.step10')


                        <div
                            class="action-buttons absolute w-11/12 bottom-0 d-flex justify-content-between bg-white pt-2 pb-2">
                            {{-- @if ($current_step == 1) --}}
                            <div style="display: {{ $current_step == 1 ? 'block' : 'none' }}; "></div>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 2 || $current_step == 3) --}}
                            <button type="button"
                                class="btn btn-md btn btn-md  gap-3 py-2 px-4  !rounded-full !text-xs text-white font-bold !bg-indigo-400"
                                style="display: {{ $current_step == 2 || $current_step == 3  || $current_step == 4 || $current_step == 5 || $current_step == 6  || $current_step == 7 || $current_step == 8 || $current_step == 9 || $current_step == 10? 'flex' : 'none' }}; "
                                wire:click="prevStep()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-4 h-4 fill-white">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" />
                                </svg> Back </button>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 1 || $current_step == 2) --}}
                            <button type="button"
                                class="btn btn-md d-flex gap-3 py-2 !bg-pink-400 px-4 !rounded-full"
                                wire:click="nextStep()"
                                style="display: {{ $current_step == 1 || $current_step == 2 || $current_step == 3  || $current_step == 4 || $current_step == 5 || $current_step == 6 || $current_step == 7 || $current_step == 8 || $current_step == 9 ? 'block' : 'none !important' }}; "><span
                                    class="!text-xs font-bold text-white">Next</span> <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-4 h-4 fill-white">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                </svg></button>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 3) --}}
                            <button type="submit"
                                class="btn btn-md btn-primary !bg-blue-900 !border-blue-900"style="display: {{ $current_step == 10 ? 'block' : 'none' }}; ">Submit</button>
                            {{-- @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="basis-1/12 navigation-sidebar px-3">
        <div class="flex flex-col gap-3 items-start">
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs text-pink-500 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;">1</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">2</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">3</span>
                <span
                class="text-center !leading-5 h-8 w-8 !text-xs text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">4</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">5</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">6</span>
                <span
                class="text-center !leading-5 h-8 w-8 !text-xs text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">7</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">8</span>
        </div>
    </div>
</div>

<script src="{{ asset('/js/employer.js') }}"></script>
