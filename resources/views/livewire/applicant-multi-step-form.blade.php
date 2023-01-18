<div class="d-flex">
    <div class="basis-11/12 pr-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500">
        <div class="h-screen w-full bg-white relative">
            <div class="w-11/12">
                <div class="border-b-2 flex gap-2 py-3 pb-4">
                    <span class="text-xs uppercase font-bold text-pink-400 ">personal info</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="text-xs uppercase font-bold text-gray-400">address</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="text-xs uppercase font-bold text-gray-400">employee status</span>
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
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Surname</label>
                                        <input type="input" class="form-control text-xs py-2.5 text-gray-400 border-light-emphasis" wire:model="surname">
                                        <span class="text-danger text-xs">@error('surname')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                    {{-- First Name --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">First
                                            Name</label>
                                        <input type="input" class="form-control py-2.5 text-xs border-light-emphasis"
                                           wire:model="firstname">
                                           <span class="text-danger text-xs">@error('firstname')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                    {{-- Last Name --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Middle
                                            Name</label>
                                        <input type="input" class="form-control py-2.5 text-xs border-light-emphasis"
                                           wire:model="middle_name">
                                           <span class="text-danger text-xs">@error('middle_name')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                    {{-- Suffix --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Suffix</label>
                                        <input type="input" class="form-control py-2.5 text-xs text-gray-100 border-light-emphasis"
                                            placeholder="Ex. Sr., Jr." wire:model="suffix">
                                            <span class="text-danger text-xs">@error('suffix')
                                                {{$message}}
                                            @enderror</span>
                                    </div>
                                    {{-- Birth of Date --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Date of
                                            Birth</label>
                                        <input type="date" class="form-control py-2.5 text-xs text-gray-400 border-light-emphasis"
                                             wire:model="birthdate">
                                             <span class="text-danger text-xs">@error('birthdate')
                                                {{$message}}
                                            @enderror</span>
                                    </div>
                                    {{-- Religion --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Religion</label>
                                        <input type="text" class="form-control py-2.5 text-xs border-light-emphasis"
                                            wire:model="religion">
                                            <span class="text-danger text-xs">@error('religion')
                                                {{$message}}
                                            @enderror</span>
                                    </div>
                                    {{-- Sex --}}
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Sex</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                       value="option1" checked wire:model="sex">
                                                    <label class="form-check-label text-xs" for="exampleRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                         value="option2" wire:model="sex">
                                                    <label class="form-check-label text-xs" for="exampleRadios2">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-danger text-xs">@error('sex')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Civil
                                            Status</label>
                                        <select class="form-select text-xs py-2.5 border-light-emphasis"
                                            aria-label="Default select example" wire:model="civil_status">
                                            <option selected value="0">Single</option>
                                            <option value="1">Married</option>
                                            <option value="2">Widowed</option>
                                            <option value="3">Seperated</option>
                                            <option value="3">Live-in</option>
                                        </select>
                                        <span class="text-danger text-xs">@error('civil_status')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Height</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control py-2.5 text-xs border-light-emphasis"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2" wire:model="height" >
                                            <span class="input-group-text text-xs border-light-emphasis"
                                                >cm</span>
                                        </div>
                                        <span class="text-danger text-xs">@error('height')
                                            {{$message}}
                                        @enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Second Step --}}
                        <div class="step-two {{ $current_step == 2 ? 'd-block' : 'd-none' }}">
                            <div class="card rounded-0 border-0">
                                <div class="card-header bg-light my-2">
                                    <h4 class="card-title fw-bold">Personal information {{ $current_step }} /
                                        {{ $total_steps }}</h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Place of Birth --}}
                                    <div class="col-md-12 mb-4">
                                        <h5 class="fw-bold text-dark-emphasis mb-4">Place of Birth</h5>
                                        <div class="row">
                                            <div class="col-md-3 mb-4 d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Province</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Province</option>
                                                    <option value="1">Bukidnon</option>
                                                    <option value="2">Davao</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Municipality/City</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Municipality</option>
                                                    <option value="1">Maramag</option>
                                                    <option value="2">Valencia Ciy</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Barangay</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Barangay</option>
                                                    <option value="1">Poblacion</option>
                                                    <option value="2">Lumbo</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4" class="form-label text-xs text-gray-400 text-light-emphasis">House
                                                    No./ Street
                                                    Village</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select street,.</option>
                                                    <option value="1">Sample</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Present Address --}}
                                    <div class="col-md-12 mb-4">
                                        <h5 class="fw-bold text-dark-emphasis mb-4">Present Address</h5>
                                        <div class="row">
                                            <div class="col-md-3 mb-4 d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Province</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Province</option>
                                                    <option value="1">Bukidnon</option>
                                                    <option value="2">Davao</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Municipality/City</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Municipality</option>
                                                    <option value="1">Maramag</option>
                                                    <option value="2">Valencia Ciy</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4"
                                                    class="form-label text-xs text-gray-400 text-light-emphasis">Barangay</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select Barangay</option>
                                                    <option value="1">Poblacion</option>
                                                    <option value="2">Lumbo</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                                <label for="inputEmail4" class="form-label text-xs text-gray-400 text-light-emphasis">House
                                                    No./ Street
                                                    Village</label>
                                                <select class="form-select border-light-emphasis"
                                                    aria-label="Default select example">
                                                    <option selected value="0">Select street,.</option>
                                                    <option value="1">Sample</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Third Step --}}
                        <div class="step-three {{ $current_step == 3 ? 'd-block' : 'd-none' }}">
                            <div class="card rounded-0 border-0">
                                <div class="card-header bg-light my-2">
                                    <h4 class="card-title fw-bold">Personal information {{ $current_step }} /
                                        {{ $total_steps }}</h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Email Address --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Email
                                            Address</label>
                                        <input type="email" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Cellphone Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Cellphone
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Landline Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Landline
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- GSIS/SSS Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">GSIS/SSS
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Pag-ibig Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Pag-ibig
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- PhilHealth Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">PhilHealth
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Disability --}}
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 text-light-emphasis">Disability</label>
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">Visual</option>
                                            <option value="1">Hearing</option>
                                            <option value="2">Speech</option>
                                            <option value="3">Physical</option>
                                            <option value="3">Others, please specify: </option>
                                        </select>
                                    </div>
                                    {{-- Employment Status --}}
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Employment
                                            Status</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios1"
                                                        value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Employed
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Unemployed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Employed Status Type --}}
                                    <div class="col-md-12 mb-4">
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">Wage Employed</option>
                                            <option value="1">Self Employed</option>
                                        </select>
                                    </div>
                                    {{-- Unemployed Status Type --}}
                                    <div class="col-md-12 mb-4">
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">New Entrant/Fresh Graduate</option>
                                            <option value="1">Finished Contract </option>
                                            <option value="1">Resigned </option>
                                            <option value="1">Retired </option>
                                            <option value="1">Terminated/Laidoff(local)</option>
                                            <option value="1">Terminated/Laidoff(abroad), specify country
                                            </option>
                                            <option value="1">Others, specify </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Fourth Step --}}
                        <div class="step-four {{ $current_step == 4 ? 'd-block' : 'd-none' }}">
                            <div class="card rounded-0">
                                <div class="card-header bg-light my-2">
                                    <h4 class="card-title fw-bold">Personal information {{ $current_step }} /
                                        {{ $total_steps }}</h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Email Address --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Email
                                            Address</label>
                                        <input type="email" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Cellphone Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Cellphone
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Landline Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Landline
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- GSIS/SSS Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">GSIS/SSS
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Pag-ibig Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Pag-ibig
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- PhilHealth Number --}}
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">PhilHealth
                                            Number</label>
                                        <input type="text" class="form-control border-light-emphasis"
                                            id="inputEmail4">
                                    </div>
                                    {{-- Disability --}}
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 text-light-emphasis">Disability</label>
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">Visual</option>
                                            <option value="1">Hearing</option>
                                            <option value="2">Speech</option>
                                            <option value="3">Physical</option>
                                            <option value="3">Others, please specify: </option>
                                        </select>
                                    </div>
                                    {{-- Employment Status --}}
                                    <div class="col-md-4 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label text-xs text-gray-400 fw-bold text-light-emphasis">Employment
                                            Status</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios1"
                                                        value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Employed
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis"
                                                        type="radio" name="exampleRadios" id="exampleRadios2"
                                                        value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Unemployed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Employed Status Type --}}
                                    <div class="col-md-12 mb-4">
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">Wage Employed</option>
                                            <option value="1">Self Employed</option>
                                        </select>
                                    </div>
                                    {{-- Unemployed Status Type --}}
                                    <div class="col-md-12 mb-4">
                                        <select class="form-select border-light-emphasis"
                                            aria-label="Default select example">
                                            <option selected value="0">New Entrant/Fresh Graduate</option>
                                            <option value="1">Finished Contract </option>
                                            <option value="1">Resigned </option>
                                            <option value="1">Retired </option>
                                            <option value="1">Terminated/Laidoff(local)</option>
                                            <option value="1">Terminated/Laidoff(abroad), specify country
                                            </option>
                                            <option value="1">Others, specify </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="action-buttons absolute w-11/12 bottom-0 d-flex justify-content-between bg-white pt-2 pb-2">
                            {{-- @if ($current_step == 1) --}}
                            <div style="display: {{ $current_step == 1 ? 'block' : 'none' }}; "></div>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 2 || $current_step == 3) --}}
                            <button type="button" class="btn btn-md btn btn-md  gap-3 py-2 px-4 !rounded-full text-xs text-white font-bold bg-indigo-400"
                                style="display: {{ $current_step == 2 || $current_step == 3 ? 'flex' : 'none' }}; "
                                wire:click="prevStep()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-white"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z"/></svg> Back </button>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 1 || $current_step == 2) --}}
                            <button type="button" class="btn btn-md d-flex gap-3 py-2 !bg-pink-400 px-4 !rounded-full" wire:click="nextStep()"
                                style="display: {{ $current_step == 1 || $current_step == 2 ? 'block' : 'none' }}; "><span class="text-xs font-bold text-white">Next</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-white"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></button>
                            {{-- @endif --}}
                            {{-- @if ($current_step == 3) --}}
                            <button type="submit"
                                class="btn btn-md btn-primary"style="display: {{ $current_step == 3 ? 'block' : 'none' }}; ">Submit</button>
                            {{-- @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="basis-1/12 pt-14 px-3">
        <div class="flex flex-col gap-5 items-start">
            <span
                class="text-center leading-5 h-8 w-8 text-xs text-pink-500 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(236 72 153 / var(--tw-text-opacity)) !important;">1</span>
            <span
                class="text-center leading-5 h-8 w-8 text-xs text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">2</span>
            <span
                class="text-center leading-5 h-8 w-8 text-xs text-gray-400 font-bold border-2 !border-indigo-500 rounded-full border p-1"
                style="border-color: rgb(156 163 175 / var(--tw-text-opacity)) !important;">3</span>
        </div>
    </div>
</div>
