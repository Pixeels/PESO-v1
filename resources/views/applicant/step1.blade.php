
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