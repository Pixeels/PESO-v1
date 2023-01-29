<div class="d-flex">
    <div class="basis-11/12 pr-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500">
        <div class="w-full bg-white relative">
            <div class="w-11/12">
                <div class="border-b-2 flex gap-2 py-3 pb-4">
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
                <div>
                    <form action="">
                        {{-- First Step --}}

                        <div class="step-one {{ $current_step == 1 ? 'd-block' : 'd-none' }}">
                            <div class="card rounded-0 border-0">
                                <div class=" bg-light mb-2 font-bold mt-10">
                                    <h4 class="card-title fw-bold">1. Personal information</h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Surname --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Surname</label>
                                        <input type="input"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            wire:model="surname">
                                        <span class="text-danger !text-xs">
                                            @error('surname')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- First Name --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">First
                                            Name</label>
                                        <input type="input"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="firstname">
                                        <span class="text-danger !text-xs">
                                            @error('firstname')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Last Name --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Middle
                                            Name</label>
                                        <input type="input"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="middle_name">
                                        <span class="text-danger !text-xs">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Suffix --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Suffix</label>
                                        <input type="input"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            placeholder="Ex. Sr., Jr." wire:model="suffix">
                                        <span class="text-danger !text-xs">
                                            @error('suffix')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Birth of Date --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Date
                                            of
                                            Birth</label>
                                        <input type="date"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="birthdate">
                                        <span class="text-danger !text-xs">
                                            @error('birthdate')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Religion --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Religion</label>
                                        <input type="text"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="religion">
                                        <span class="text-danger !text-xs">
                                            @error('religion')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Sex --}}
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Sex</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option1" checked wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-danger !text-xs">
                                            @error('sex')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Civil
                                            Status</label>
                                        <select
                                            class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                            aria-label="Default select example" wire:model="civil_status">
                                            <option selected value="0">Single</option>
                                            <option value="1">Married</option>
                                            <option value="2">Widowed</option>
                                            <option value="3">Seperated</option>
                                            <option value="3">Live-in</option>
                                        </select>
                                        <span class="text-danger !text-xs">
                                            @error('civil_status')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Height</label>
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                class="form-control !text-gray-500 !py-2.5 !text-xs border-light-emphasis"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                wire:model="height">
                                            <span
                                                class="input-group-text !text-gray-500 !text-xs border-light-emphasis">cm</span>
                                        </div>
                                        <span class="text-danger !text-xs">
                                            @error('height')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="row">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Are
                                                you actively looking for work?</label>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input yes_actively_looking_for_work border-light-emphasis"
                                                            type="radio" name="exampleRadios" id="exampleRadios1"
                                                            value="option1" checked>
                                                        <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                            for="exampleRadios1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input not_actively_looking_for_work border-light-emphasis"
                                                            type="radio" name="exampleRadios" id="exampleRadios2"
                                                            value="option2">
                                                        <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                            for="exampleRadios2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4 is_actively_looking_for_work d-none">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">How
                                                    long have you been looking for work?</label>
                                                <input type="text"
                                                    class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                    wire:model="religion">
                                                <span class="text-danger !text-xs">
                                                    @error('religion')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Willing
                                            to work immediately? </label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input yes_when_to_work border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios1"
                                                        value="option1" checked>
                                                    <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                        for="exampleRadios1">
                                                        Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input no_when_to_work border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                        for="exampleRadios2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4 is_not_when_to_work d-none">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">If
                                                    no, when?</label>
                                                <input type="text"
                                                    class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                    wire:model="religion">
                                                <span class="text-danger !text-xs">
                                                    @error('religion')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Are
                                            you a 4Ps beneficiary? </label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input yes_4ps_beneficiary border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios1"
                                                        value="option1" checked>
                                                    <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                        for="exampleRadios1">
                                                        Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input no_4ps_beneficiary border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                        for="exampleRadios2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4 is_4ps_beneficiary d-none">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">If
                                                    yes, Household ID No. </label>
                                                <input type="text"
                                                    class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                    wire:model="religion">
                                                <span class="text-danger !text-xs">
                                                    @error('religion')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Place of Birth --}}
                                    <div class="col-md-6 mb-4">
                                        <h5 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">Place of
                                            Birth</h5>
                                        <div class="row">
                                            <div class="col-md-12 mb-4 d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Province</label>
                                                <select
                                                    class="form-select pob_province border-light-emphasis !text-xs !py-2.5 !text-gray-500"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Province</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Municipality/City</label>
                                                <select
                                                    class="form-select pob_city !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Municipality</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Barangay</label>
                                                <select
                                                    class=" pob_barangay  !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Barangay</option>
                                                    <option value="1">Poblacion</option>
                                                    <option value="2">Lumbo</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">House
                                                    No./ Street
                                                    Village</label>
                                                <input type="input"
                                                    class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Present Address --}}
                                    <div class="col-md-6 mb-4">
                                        <h5 class="fw-bold text-gray-500 text-dark-emphasis mb-4">Present Address</h5>
                                        <div class="row">
                                            <div class="col-md-12 mb-4 d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Province</label>
                                                <select
                                                    class=" pa_province !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Province</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Municipality/City</label>
                                                <select
                                                    class=" pa_city !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Municipality</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">Barangay</label>
                                                <select
                                                    class=" pa_barangay !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Barangay</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label !text-xs !text-gray-400 text-light-emphasis">House
                                                    No./ Street
                                                    Village</label>
                                                <input type="input"
                                                    class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 2nd Step --}}
                        <div class="step-three {{ $current_step == 2 ? 'd-block' : 'd-none' }}">
                            <div class="card rounded-0 border-0">
                                <div class="card-header bg-light my-2">
                                    <h4 class="card-title fw-bold ">1. Personal information </h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Email Address --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Email
                                            Address</label>
                                        <input type="email"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Cellphone Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Cellphone
                                            Number</label>
                                        <input type="text"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Landline Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Landline
                                            Number</label>
                                        <input type="text"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- GSIS/SSS Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">GSIS/SSS
                                            Number</label>
                                        <input type="text"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Pag-ibig Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Pag-ibig
                                            Number</label>
                                        <input type="text"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- PhilHealth Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">PhilHealth
                                            Number</label>
                                        <input type="text"
                                            class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        {{-- Disability --}}
                                        <div class="col-md-12 mb-4">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 text-light-emphasis">Disability</label>
                                            <select
                                                class="form-select disability border-light-emphasis mb-2 !text-xs !py-2.5 !text-gray-500"
                                                aria-label="Default select example">
                                                <option value="" selected>Select disablity</option>
                                                <option value="0">Visual</option>
                                                <option value="1">Hearing</option>
                                                <option value="2">Speech</option>
                                                <option value="3">Physical</option>
                                                <option value="4">Others, please specify: </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        {{-- Employment Status --}}
                                        <div class="col-md-4 mb-4">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Employment
                                                Status</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input employed border-light-emphasis"
                                                            type="radio" name="exampleRadios" id="exampleRadios1"
                                                            value="option1" checked>
                                                        <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                            for="exampleRadios1">
                                                            Employed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input unemployed border-light-emphasis"
                                                            type="radio" name="exampleRadios" id="exampleRadios2"
                                                            value="option2">
                                                        <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                            for="exampleRadios2">
                                                            Unemployed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Employed Status Type --}}
                                        <div class="col-md-12 mb-4 employed-status d-none">
                                            <select
                                                class="form-select  border-light-emphasis  !text-xs !py-2.5 !text-gray-500"
                                                aria-label="Default select example">
                                                <option selected value="0">Wage Employed</option>
                                                <option value="1">Self Employed</option>
                                            </select>
                                        </div>
                                        {{-- Unemployed Status Type --}}
                                        <div class="col-md-12 mb-4 unemployed-status d-none">
                                            <select
                                                class="form-select unemployed-status-select border-light-emphasis !text-xs !py-2.5 !text-gray-500"
                                                aria-label="Default select example">
                                                <option selected value="">Please Select unemployed status
                                                </option>
                                                <option value="0">New Entrant/Fresh Graduate</option>
                                                <option value="2">Finished Contract </option>
                                                <option value="3">Resigned </option>
                                                <option value="4">Retired </option>
                                                <option value="5">Terminated/Laidoff(local)</option>
                                                <option value="6">Terminated/Laidoff(abroad), specify country
                                                </option>
                                                <option value="7">Others, specify </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- 3rd Step --}}
                        <div class="step-four {{ $current_step == 3 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">2. Job Preference </h4>
                                <div class="card-body pl-0 pt-3">

                                    <div class="row">
                                        {{-- Place of Birth --}}
                                        <div class="col-md-12 mb-4">
                                            <h5 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                Preferred Occupation</h5>
                                            <div class="row">
                                                <div class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">3</label>
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">4</label>
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Present Address --}}
                                        <div class="col-md-12 mb-4">
                                            <h5 class="fw-bold text-gray-500 text-dark-emphasis mb-4">Preferred Work
                                                Location
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                                    type="checkbox" name="exampleRadios"
                                                                    id="exampleRadios1" value="option1">
                                                                <label
                                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                                    for="exampleRadios1">
                                                                    Local,specify cities/municipalities:
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                                            <input type="input"
                                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                                            <input type="input"
                                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">3</label>
                                                            <input type="input"
                                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input overseas_preferred_work_location border-light-emphasis"
                                                                    type="checkbox" name="exampleRadios"
                                                                    id="exampleRadios1" value="option1">
                                                                <label
                                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                                    for="exampleRadios1">
                                                                    Overseas,specify countries:
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                                            <input type="input"
                                                                class="form-control !text-xs isoverseas_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                                            <input type="input"
                                                                class="form-control !text-xs isoverseas_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                        <div
                                                            class="col-md-12 mb-4  d-flex flex-row align-items-center gap-3 ">
                                                            <label for="inputEmail4"
                                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">3</label>
                                                            <input type="input"
                                                                class="form-control !text-xs isoverseas_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis"
                                                                disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Expected Salary (Range)  --}}
                                        <div class="col-md-4 mb-4">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Expected
                                                Salary (Range) </label>
                                            <input type="text"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                id="inputEmail4">
                                        </div>
                                        {{-- Passport No.r --}}
                                        <div class="col-md-4 mb-4">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Passport
                                                No.</label>
                                            <input type="text"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                id="inputEmail4">
                                        </div>
                                        {{-- Expiry date --}}
                                        <div class="col-md-4 mb-4">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Expiry
                                                date</label>
                                            <input type="text"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                id="inputEmail4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 4th Step --}}
                        <div class="step-four {{ $current_step == 4 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">3. LANGUAGE / DIALECT PROFICIENCY </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                Check if applicable</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Read</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Write</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Speak</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Understand</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input" value="English"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                disabled='disabled'>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input" value="Filipino"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                disabled='disabled'>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                                                placeholder="Others: ">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                                <div class="col-md-3">
                                                    <input
                                                        class="form-check-input local_preferred_work_location border-light-emphasis"
                                                        type="checkbox" name="exampleRadios" id="exampleRadios1"
                                                        value="option1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 5th Step --}}
                        <div class="step-four {{ $current_step == 5 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">4. Educational Background</h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-4">
                                                <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                    Elementary</h6>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">School</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Course</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Year
                                                        Graduated</label>
                                                    <input type="month"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="row !pr-0">
                                                    <h6
                                                        class="fw-bold text-dark-emphasis !text-xs text-gray-500 !pr-0 !text-md">
                                                        If undergraduate, </h6>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">What
                                                            level?</label>
                                                        <input type="text"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 mb-2 !pr-0">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">year
                                                            last attended</label>
                                                        <input type="month"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Awards
                                                        recieved</label>
                                                    <input type="text"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mb-4">
                                                <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                    Secondary</h6>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">School</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Course</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Year
                                                        Graduated</label>
                                                    <input type="month"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="row !pr-0">
                                                    <h6
                                                        class="fw-bold text-dark-emphasis !text-xs !pr-0 text-gray-500 !text-md">
                                                        If undergraduate, </h6>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">What
                                                            level?</label>
                                                        <input type="text"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 mb-2 !pr-0">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">year
                                                            last attended</label>
                                                        <input type="month"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Awards
                                                        recieved</label>
                                                    <input type="text"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mb-4">
                                                <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                    Tertiary</h6>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">School</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Course</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Year
                                                        Graduated</label>
                                                    <input type="month"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="row !pr-0">
                                                    <h6
                                                        class="fw-bold text-dark-emphasis !text-xs text-gray-500 !text-md">
                                                        If undergraduate, </h6>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">What
                                                            level?</label>
                                                        <input type="text"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 mb-2 !pr-0">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">year
                                                            last attended</label>
                                                        <input type="month"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Awards
                                                        recieved</label>
                                                    <input type="text"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mb-4">
                                                <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                    Graduate Studies</h6>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">School</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Course</label>
                                                    <input type="input"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Year
                                                        Graduated</label>
                                                    <input type="month"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="row !pr-0">
                                                    <h6
                                                        class="fw-bold text-dark-emphasis !text-xs text-gray-500 !text-md">
                                                        If undergraduate, </h6>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">What
                                                            level?</label>
                                                        <input type="text"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 mb-2 !pr-0">
                                                        <label for="inputEmail4"
                                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">year
                                                            last attended</label>
                                                        <input type="month"
                                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                            wire:model="firstname">
                                                        <span class="text-danger !text-xs">
                                                            @error('firstname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="inputEmail4"
                                                        class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Awards
                                                        recieved</label>
                                                    <input type="text"
                                                        class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                                        wire:model="firstname">
                                                    <span class="text-danger !text-xs">
                                                        @error('firstname')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 6th Step --}}
                        <div class="step-four {{ $current_step == 6 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">6. TECHNICAL/VOCATIONAL AND OTHER
                                    TRAINING (Include courses takens as part of college education) </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                TRAINING/VOCATIONAL COURSE</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Duration</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Training Institution</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Certificates Received</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6 !pr-0 ">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-6 !pr-0">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input" placeholder="(NC I, NC II, NC II, NC IV, etc)"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6 !pr-0 ">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-6 !pr-0">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input" placeholder="(NC I, NC II, NC II, NC IV, etc)"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-3 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">3</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6 !pr-0 ">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-6 !pr-0">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="input" placeholder="(NC I, NC II, NC II, NC IV, etc)"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- 7th Step --}}
                        <div class="step-four {{ $current_step == 7 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">7. ELIGIBILITY/ PROFESSIONAL LICENSE
                                </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                ELIGIBILITY (Civil Service)</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Rating</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Date of examination</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                PROFESSIONAL LICENSE (PRC)</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6
                                                class="fw-bold text-dark-emphasis mb-2 !text-xs text-gray-500 !text-md">
                                                Valid Until</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <div class="col-md-6 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">1</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <div class="col-md-6 mb-4  d-flex flex-row align-items-center gap-3 ">
                                            <label for="inputEmail4"
                                                class="form-label !text-xs !text-gray-600 mb-0 fw-bold text-light-emphasis">2</label>
                                            <input type="input"
                                                class="form-control !text-xs islocal_preferred_work_location !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- 8th Step --}}
                        <div class="step-four {{ $current_step == 8 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">8. WORK EXPERIENCE (Limit to 10 year
                                    period, start with the most recent employment) </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                Company Name</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Address</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Position</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Inclusive Dates</h6>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6 class="fw-bold text-dark-emphasis mb-4 text-gray-500 !text-md">
                                                        Status</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <select
                                                        class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                                        aria-label="Default select example" wire:model="civil_status">
                                                        <option selected value="">Select status</option>
                                                        <option value="0">Permanent</option>
                                                        <option value="1">Contractual</option>
                                                        <option value="2">Part-time</option>
                                                        <option value="3">Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <select
                                                        class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                                        aria-label="Default select example" wire:model="civil_status">
                                                        <option selected value="">Select status</option>
                                                        <option value="0">Permanent</option>
                                                        <option value="1">Contractual</option>
                                                        <option value="2">Part-time</option>
                                                        <option value="3">Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <select
                                                        class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                                        aria-label="Default select example" wire:model="civil_status">
                                                        <option selected value="">Select status</option>
                                                        <option value="0">Permanent</option>
                                                        <option value="1">Contractual</option>
                                                        <option value="2">Part-time</option>
                                                        <option value="3">Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <select
                                                        class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                                        aria-label="Default select example" wire:model="civil_status">
                                                        <option selected value="">Select status</option>
                                                        <option value="0">Permanent</option>
                                                        <option value="1">Contractual</option>
                                                        <option value="2">Part-time</option>
                                                        <option value="3">Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <input type="input"
                                                class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="input"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="date"
                                                        class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                                </div>
                                                <div class="col-md-3">
                                                    <select
                                                        class="form-select !text-xs !text-gray-500 !py-2.5 border-light-emphasis"
                                                        aria-label="Default select example" wire:model="civil_status">
                                                        <option selected value="">Select status</option>
                                                        <option value="0">Permanent</option>
                                                        <option value="1">Contractual</option>
                                                        <option value="2">Part-time</option>
                                                        <option value="3">Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 9th Step --}}
                        <div class="step-four {{ $current_step == 9 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 fw-bold">8. OTHER SKILLS ACQUIRED WITHOUT FORMAL TRAINING                                </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Auto Mechanic
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Electrician
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Photography
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Beautician
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Embroidery
                                                </label>
                                            </div>
                                        </div><div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Plumbing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Carpentry Work
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Gardening
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Sewing Dresses
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Computer Literate
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Masonry
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Stenography
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Domestic Chores
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Painter/Artist
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Tailoring
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Driving
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input local_preferred_work_location border-light-emphasis"
                                                    type="checkbox" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label
                                                    class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                                    for="exampleRadios1">
                                                    Painting Jobs
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input" placeholder="Others: "
                                                    class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 10th Step --}}
                        <div class="step-four {{ $current_step == 10 ? 'd-block' : 'd-none' }}">
                            <div class="py-5 card border-0 rounded-0">
                                <h4 class="card-header pl-0 border-0 text-center fw-bold">CERTIFICATION/AUTHORIZATION
                                </h4>
                                <div class="card-body pl-0 pt-3">
                                    <div class="row">
                                        <h6 class="indent-16 !text-gray-500">This is to certify that all data/information that I have provided in this form are true to the best of my knowledge.This
                                            Is also to authorized the DOLE to include my profile in the PESO Employment Information System , which ia a subsystem of the
                                            PhilJobNet. It is understood that my name shall be made available to employers who have access to the Registry. I am also aware
                                            that DOLE is not obliged to seek employment on my behalf.
                                            </h6>

                                    </div>

                                </div>
                                <div class="row mt-5">
                                    <div class="flex justify-center">
                                        <div class="mb-3 w-96">
                                          <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Upload applicant signature</label>
                                          <input class="form-control
                                          block
                                          w-full
                                          px-3
                                          py-1.5
                                          text-base
                                          font-normal
                                          text-gray-700
                                          bg-white bg-clip-padding
                                          border border-solid border-gray-300
                                          rounded
                                          transition
                                          ease-in-out
                                          m-0
                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>


                        <div
                            class="action-buttons absolute w-11/12 bottom-0 d-flex justify-content-between bg-white pt-2 pb-2">
                            {{-- @if ($current_step == 1) --}}
                            <div style="display: {{ $current_step == 1 ? 'block' : 'none' }}; "></div>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 2 || $current_step == 3) --}}
                            <button type="button"
                                class="btn btn-md btn btn-md  gap-3 py-2 px-4 !rounded-full !text-xs text-white font-bold bg-indigo-400"
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
                                style="display: {{ $current_step == 1 || $current_step == 2 || $current_step == 3  || $current_step == 4 || $current_step == 5 || $current_step == 6 || $current_step == 7 || $current_step == 8 || $current_step == 9 ? 'block' : 'none' }}; "><span
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
                                class="btn btn-md btn-primary"style="display: {{ $current_step == 10 ? 'block' : 'none' }}; ">Submit</button>
                            {{-- @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="basis-1/12 px-3">
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
                class="text-center !leading-5 h-8 w-8 !text-xs text-pink-500 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;">4</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">5</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">6</span>
                <span
                class="text-center !leading-5 h-8 w-8 !text-xs text-pink-500 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;">7</span>
            <span
                class="text-center !leading-5 h-8 w-8 !text-xs !text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">8</span>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.disability').on('change', function() {
        if ($(this).val() == 4) {
            $(this).after("<input type='text' placeholder='Please specifiy here...' class='form-control disability-others mt-2 !text-xs !py-2.5 !text-gray-500 border-light-emphasis'\
                                        id='inputEmail4'>");

        } else {
            $(this).next().remove();
        }
    });

    $('.employed').on('change', function() {
        if ($('.employed').is(':checked')) {
            $('.employed-status').removeClass('d-none');
            if (!$('.unemployed-status').hasClass('d-none')) {
                $('.unemployed-status').addClass('d-none');
            }
        }
    });

    $('.unemployed').on('change', function() {
        if ($('.unemployed').is(':checked')) {
            $('.unemployed-status').removeClass('d-none');
            if (!$('.employed-status').hasClass('d-none')) {
                $('.employed-status').addClass('d-none');
            }
        }
    });



    $('.yes_actively_looking_for_work').on('change', function() {
        if ($('.yes_actively_looking_for_work').is(':checked')) {
            $('.is_actively_looking_for_work').removeClass('d-none');
        }
    });

    $('.not_actively_looking_for_work').on('change', function() {
        if ($('.not_actively_looking_for_work').is(':checked')) {
            $('.is_actively_looking_for_work').addClass('d-none');
        }
    });

    $('.yes_when_to_work').on('change', function() {
        if ($('.yes_when_to_work').is(':checked')) {
            $('.is_not_when_to_work').addClass('d-none');
        }
    });

    $('.no_when_to_work').on('change', function() {
        if ($('.no_when_to_work').is(':checked')) {
            $('.is_not_when_to_work').removeClass('d-none');
        }
    });

    $('.yes_4ps_beneficiary').on('change', function() {
        if ($('.yes_4ps_beneficiary').is(':checked')) {
            $('.is_4ps_beneficiary').removeClass('d-none');
        }
    });

    $('.no_4ps_beneficiary').on('change', function() {
        if ($('.no_4ps_beneficiary').is(':checked')) {
            $('.is_4ps_beneficiary').addClass('d-none');
        }
    });

    $('.unemployed-status-select').on('change', function() {
        if ($(this).val() == 7) {
            $(this).after("<input type='text' placeholder='Please specifiy here...' class='form-control mt-2 !text-xs !py-2.5 !text-gray-500 border-light-emphasis'\
                                        id='inputEmail4'>");
        } else {
            $(this).next().remove();
        }

    });

    $('.local_preferred_work_location').on('change', function() {
        if ($(this).is(':checked')) {
            $('.islocal_preferred_work_location').removeAttr('disabled');
        }

    });

    $('.overseas_preferred_work_location').on('change', function() {
        if ($(this).is(':checked')) {
            $('.isoverseas_preferred_work_location').removeAttr('disabled');
        }

    });

    var my_handlers = {

        fill_pob_provinces: function() {

            var region_code = $(this).val();
            $('.pob_province').ph_locations('fetch_list', [{
                "region_code": region_code
            }]);
        },

        fill_pob_cities: function() {

            var province_code = $(this).val();
            $('.pob_city').ph_locations('fetch_list', [{
                "province_code": province_code
            }]);
        },


        fill_pob_barangays: function() {

            var city_code = $(this).val();
            $('.pob_barangay').ph_locations('fetch_list', [{
                "city_code": city_code
            }]);
        },

        fill_pa_provinces: function() {

            var region_code = $(this).val();
            $('.pob_province').ph_locations('fetch_list', [{
                "region_code": region_code
            }]);
        },

        fill_pa_cities: function() {

            var province_code = $(this).val();
            $('.pa_city').ph_locations('fetch_list', [{
                "province_code": province_code
            }]);
        },


        fill_pa_barangays: function() {

            var city_code = $(this).val();
            $('.pa_barangay').ph_locations('fetch_list', [{
                "city_code": city_code
            }]);
        }
    };

    $(function() {
        $('.pob_province').on('change', my_handlers.fill_pob_cities);
        $('.pob_city').on('change', my_handlers.fill_pob_barangays);

        $('.pob_province').ph_locations({
            'location_type': 'provinces'
        });
        $('.pob_city').ph_locations({
            'location_type': 'cities'
        });
        $('.pob_barangay').ph_locations({
            'location_type': 'barangays'
        });

        $('.pob_province').ph_locations('fetch_list');

        $('.pa_province').on('change', my_handlers.fill_pa_cities);
        $('.pa_city').on('change', my_handlers.fill_pa_barangays);

        $('.pa_province').ph_locations({
            'location_type': 'provinces'
        });
        $('.pa_city').ph_locations({
            'location_type': 'cities'
        });
        $('.pa_barangay').ph_locations({
            'location_type': 'barangays'
        });

        $('.pa_province').ph_locations('fetch_list');

    });
</script>
