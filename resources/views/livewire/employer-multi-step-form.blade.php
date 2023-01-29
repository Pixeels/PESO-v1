<div class="d-flex">
    <div class="basis-11/12 pr-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500">
        <div class="w-full bg-white relative">
            <div class="w-11/12">
                <div class="border-b-2 flex gap-2 py-3 pb-4">
                    <span class="!text-xs uppercase font-bold text-pink-400 ">ESTABLISHMENT DETAILS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">CONTACT DETAILS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">VACANCY DETAILS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">QUALIFICATION</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-3 h-3 fill-gray-400">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <span class="!text-xs uppercase font-bold !text-gray-400">POSTING</span>
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
                                    <h4 class="card-title fw-bold">I. ESTABLISHMENT DETAILS</h4>
                                </div>
                                <div class="card-body row">
                                    {{-- Surname --}}
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Establishment Name: </label>
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
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">Acronym/Abbreviation:</label>
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
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Tax Identification Number:
                                        </label>
                                        <input type="input"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="middle_name">
                                        <span class="text-danger !text-xs">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Sex --}}
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Employer type:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option1" checked wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios1">
                                                        Government
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Private
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Recruitment & Placement Agency (Local)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Licensed Recruitment Agency (Overseas)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        DO 174-17, Subcontractor
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
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Total Work Force:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option1" checked wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios1">
                                                        Micro (1-9)     
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Small (10-99)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Medium (100-199) 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input border-light-emphasis" type="radio"
                                                        value="option2" wire:model="sex">
                                                    <label class="form-check-label !text-xs !text-gray-500"
                                                        for="exampleRadios2">
                                                        Large (200 and up)
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
                                    <div class="col-md-12 mb-4">
                                        <label for="inputEmail4"
                                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Line of Business/Industry (check BIR 2303): 
                                        </label>
                                        <input type="input"
                                            class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                                            wire:model="middle_name">
                                        <span class="text-danger !text-xs">
                                            @error('middle_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- Present Address --}}
                                    <div class="col-md-12 mb-4">
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
