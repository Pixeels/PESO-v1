<div class="step-1">
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
                    class="form-control !text-xs !py-2.5 !text-gray-500 border-light-emphasis pi_surname">
                <span class="text-danger !text-xs pi_surname-error">
                </span>
            </div>
            {{-- First Name --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4" class="form-label !text-xs text-gray-400 fw-bold text-light-emphasis">First
                    Name</label>
                <input type="input"
                    class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis pi_firstname">
                <span class="text-danger !text-xs pi_firstname-error">
                </span>
            </div>
            {{-- Last Name --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4" class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Middle
                    Name</label>
                <input type="input"
                    class="form-control !py-2.5 !text-xs !text-gray-500 border-light-emphasis pi_middlename">
                <span class="text-danger !text-xs pi_middlename-error">
                </span>
            </div>
            {{-- Suffix --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Suffix</label>
                <input type="input" class="form-control !py-2.5 !text-xs pi_suffix !text-gray-500 border-light-emphasis"
                    placeholder="Ex. Sr., Jr.">
                <span class="text-danger !text-xs pi_suffix-error">
                </span>
            </div>
            {{-- Birth of Date --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4" class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Date
                    of
                    Birth</label>
                <input type="date" class="form-control !py-2.5 !text-xs pi_date_of_birth !text-gray-500 border-light-emphasis"
                    >
                    <span class="text-danger !text-xs pi_date_of_birth-error">
                    </span>
            </div>
            {{-- Religion --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Religion</label>
                <input type="text" class="form-control !py-2.5 pi_religion !text-xs !text-gray-500 border-light-emphasis"
                    >
                    <span class="text-danger !text-xs pi_religion-error">
                    </span>
            </div>
            {{-- Sex --}}
            <div class="col-md-4 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Sex</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input pi_sex border-light-emphasis" type="radio" value="Male" 
                               >
                            <label class="form-check-label !text-xs !text-gray-500" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input pi_sex border-light-emphasis" type="radio" value="Female"
                               >
                            <label class="form-check-label !text-xs !text-gray-500" for="exampleRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <span class="text-danger !text-xs pi_sex-error">
                </span>
            </div>
            <div class="col-md-4 mb-4">
                <label for="inputEmail4" class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Civil
                    Status</label>
                <select class="form-select !text-xs pi_civil_status !text-gray-500 !py-2.5 border-light-emphasis"
                    aria-label="Default select example" >
                    <option selected value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Seperated">Seperated</option>
                    <option value="Live-in">Live-in</option>
                </select>
                <span class="text-danger !text-xs pi_civil_status-error">
                </span>
            </div>
            <div class="col-md-4 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Height</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control pi_height !text-gray-500 !py-2.5 !text-xs border-light-emphasis"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text !text-gray-500 !text-xs border-light-emphasis">cm</span>
                </div>
                <span class="text-danger !text-xs pi_height-error">
                </span>
            </div>
            <div class="col-md-4 mb-4">
                <div class="row">
                    <label for="inputEmail4" class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Are
                        you actively looking for work?</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input pi_looking_for_work yes_actively_looking_for_work border-light-emphasis"
                                    type="radio" name="exampleRadios" id="exampleRadios1" value="Yes" >
                                <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input pi_looking_for_work not_actively_looking_for_work border-light-emphasis"
                                    type="radio" name="exampleRadios" id="exampleRadios2" value="No">
                                <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger !text-xs pi_looking_for_work-error">
                    </span>
                    <div class="col-md-12 mb-4 is_actively_looking_for_work d-none">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">How
                            long have you been looking for work?</label>
                        <input type="text"
                            class="form-control pi_is_actively_looking_for_work !py-2.5 !text-xs !text-gray-500 border-light-emphasis"
                            >
                            <span class="text-danger !text-xs pi_is_actively_looking_for_work-error">
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
                            <input class="form-check-input pi_when_to_work yes_when_to_work border-light-emphasis" type="radio"
                                name="exampleRadios" id="exampleRadios1" value="Yes" >
                            <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input pi_when_to_work no_when_to_work border-light-emphasis" type="radio"
                                name="exampleRadios" id="exampleRadios2" value="No">
                            <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    <span class="text-danger !text-xs pi_when_to_work-error">
                    </span>
                    <div class="col-md-12 mb-4 is_not_when_to_work d-none">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">If
                            no, when?</label>
                        <input type="text"
                            class="form-control !py-2.5  pi_not_when_to_work !text-xs !text-gray-500 border-light-emphasis"
                            >
                            <span class="text-danger !text-xs pi_not_when_to_work-error">
                            </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <label for="inputEmail4" class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Are
                    you a 4Ps beneficiary? </label>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input pi_4ps_beneficiary yes_4ps_beneficiary border-light-emphasis" type="radio"
                                name="exampleRadios" id="exampleRadios1" value="Yes" >
                            <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input pi_4ps_beneficiary no_4ps_beneficiary border-light-emphasis" type="radio"
                                name="exampleRadios" id="exampleRadios2" value="No">
                            <label class="form-check-label !text-xs !py-2.5 !text-gray-500" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    <span class="text-danger !text-xs pi_4ps_beneficiary-error">
                    </span>
                    <div class="col-md-12 mb-4 is_4ps_beneficiary d-none">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">If
                            yes, Household ID No. </label>
                        <input type="text"
                            class="form-control !py-2.5 pi_4ps_household_id !text-xs !text-gray-500 border-light-emphasis"
                            >
                            <span class="text-danger !text-xs pi_4ps_household_id-error">
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
                        <select class="form-select pob_province border-light-emphasis !text-xs !py-2.5 !text-gray-500"
                            aria-label="Default select example">
                            <option  value="0">Select Province</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 text-light-emphasis">Municipality/City</label>
                        <select class="form-select pob_city !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                            aria-label="Default select example">
                            <option  value="0">Select Municipality</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 text-light-emphasis">Barangay</label>
                        <select
                            class=" pob_barangay  !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                            aria-label="Default select example">
                            <option  value="0">Select Barangay</option>
                            <option value="1">Poblacion</option>
                            <option value="2">Lumbo</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4" class="form-label pop_street !text-xs !text-gray-400 text-light-emphasis">House
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
                        <select class=" pa_province !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                            aria-label="Default select example">
                            <option  value="0">Select Province</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 text-light-emphasis">Municipality/City</label>
                        <select class=" pa_city !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                            aria-label="Default select example">
                            <option  value="0">Select Municipality</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4"
                            class="form-label !text-xs !text-gray-400 text-light-emphasis">Barangay</label>
                        <select class=" pa_barangay !text-xs !py-2.5 !text-gray-500 form-select border-light-emphasis"
                            aria-label="Default select example">
                            <option  value="0">Select Barangay</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-4  d-flex flex-column justify-content-between">
                        <label for="inputEmail4" class="form-label !text-xs !text-gray-400 text-light-emphasis">House
                            No./ Street
                            Village</label>
                        <input type="input"
                            class="form-control pa_street !text-xs !py-2.5 !text-gray-500 border-light-emphasis">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
