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