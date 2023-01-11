<div>
    <form action="">
        {{-- First Step --}}

        <div class="step-one {{ ($current_step == 1) ? "d-block": "d-none"}}">
            <div class="card rounded-0">
                <div class="card-header bg-light my-2">
                    <h4 class="card-title fw-bold">Personal information {{$current_step}} / {{$total_steps}}</h4>
                </div>
                <div class="card-body row">
                    {{-- Surname --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Surname</label>
                        <input type="input" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- First Name --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">First Name</label>
                        <input type="input" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Last Name --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Middle Name</label>
                        <input type="input" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Suffix --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Suffix</label>
                        <input type="input" class="form-control border-light-emphasis" placeholder="Ex. Sr., Jr."
                            id="inputEmail4">
                    </div>
                    {{-- Birth of Date --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Date of Birth</label>
                        <input type="date" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Religion --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Religion</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Sex --}}
                    <div class="col-md-4 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Religion</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input border-light-emphasis" type="radio"
                                        name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input border-light-emphasis" type="radio"
                                        name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Civil Status</label>
                        <select class="form-select border-light-emphasis" aria-label="Default select example">
                            <option selected value="0">Single</option>
                            <option value="1">Married</option>
                            <option value="2">Widowed</option>
                            <option value="3">Seperated</option>
                            <option value="3">Live-in</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Height</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-light-emphasis"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text border-light-emphasis" id="basic-addon2">cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Second Step --}}
        <div class="step-two {{ ($current_step == 2) ? "d-block": "d-none"}}">
            <div class="card rounded-0">
                <div class="card-header bg-light my-2">
                    <h4 class="card-title fw-bold">Personal information {{$current_step}} / {{$total_steps}}</h4>
                </div>
                <div class="card-body row">
                    {{-- Place of Birth --}}
                    <div class="col-md-12 mb-4">
                        <h5 class="fw-bold text-dark-emphasis mb-4">Place of Birth</h5>
                        <div class="row">
                            <div class="col-md-3 mb-4 d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">Province</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4"
                                    class="form-label text-light-emphasis">Municipality/City</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">Barangay</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">House No./ Street
                                    Village</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Present Address --}}
                    <div class="col-md-12 mb-4">
                        <h5 class="fw-bold text-dark-emphasis mb-4">Present Address</h5>
                        <div class="row">
                            <div class="col-md-3 mb-4 d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">Province</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4"
                                    class="form-label text-light-emphasis">Municipality/City</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">Barangay</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4  d-flex flex-column justify-content-between">
                                <label for="inputEmail4" class="form-label text-light-emphasis">House No./ Street
                                    Village</label>
                                <select class="form-select border-light-emphasis" aria-label="Default select example">
                                    <option selected value="0">Single</option>
                                    <option value="1">Married</option>
                                    <option value="2">Widowed</option>
                                    <option value="3">Seperated</option>
                                    <option value="3">Live-in</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Third Step --}}
        <div class="step-three {{ ($current_step == 3) ? "d-block": "d-none"}}">
            <div class="card rounded-0">
                <div class="card-header bg-light my-2">
                    <h4 class="card-title fw-bold">Personal information {{$current_step}} / {{$total_steps}}</h4>
                </div>
                <div class="card-body row">
                    {{-- Email Address --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Email Address</label>
                        <input type="email" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Cellphone Number --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Cellphone
                            Number</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Landline Number --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Landline
                            Number</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- GSIS/SSS Number --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">GSIS/SSS
                            Number</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Pag-ibig Number --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Pag-ibig
                            Number</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- PhilHealth Number --}}
                    <div class="col-md-6 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">PhilHealth
                            Number</label>
                        <input type="text" class="form-control border-light-emphasis" id="inputEmail4">
                    </div>
                    {{-- Disability --}}
                    <div class="col-md-12 mb-4">
                        <label for="inputEmail4" class="form-label text-light-emphasis">Disability</label>
                        <select class="form-select border-light-emphasis" aria-label="Default select example">
                            <option selected value="0">Visual</option>
                            <option value="1">Hearing</option>
                            <option value="2">Speech</option>
                            <option value="3">Physical</option>
                            <option value="3">Others, please specify: </option>
                        </select>
                    </div>
                    {{-- Employment Status --}}
                    <div class="col-md-4 mb-4">
                        <label for="inputEmail4" class="form-label fw-bold text-light-emphasis">Employment
                            Status</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input border-light-emphasis" type="radio"
                                        name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Employed
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input border-light-emphasis" type="radio"
                                        name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Unemployed
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Employed Status Type --}}
                    <div class="col-md-12 mb-4">
                      <select class="form-select border-light-emphasis" aria-label="Default select example">
                          <option selected value="0">Wage Employed</option>
                          <option value="1">Self Employed</option>
                      </select>
                  </div>
                  {{-- Unemployed Status Type --}}
                  <div class="col-md-12 mb-4">
                    <select class="form-select border-light-emphasis" aria-label="Default select example">
                        <option selected value="0">New Entrant/Fresh Graduate</option>
                        <option value="1">Finished Contract </option>
                        <option value="1">Resigned </option>
                        <option value="1">Retired </option>
                        <option value="1">Terminated/Laidoff(local)</option>
                        <option value="1">Terminated/Laidoff(abroad), specify country </option>
                        <option value="1">Others, specify </option>
                    </select>
                </div>
                </div>
            </div>
        </div>

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2 mb-5">
            @if ($current_step == 1)
                <div></div>
            @endif
            @if ($current_step == 2 || $current_step == 3)
                <button type="button" class="btn btn-md btn-secondary" wire:click="prevStep()">Back</button>
            @endif
            @if ($current_step == 1 || $current_step == 2)
                <button type="button" class="btn btn-md btn-success" wire:click="nextStep()">Next</button>
            @endif
            @if ($current_step == 3)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif
        </div>
    </form>
</div>
