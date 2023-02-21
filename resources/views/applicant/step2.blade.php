<div class="step-2">
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
                    class="form-control !text-xs pi_email_address !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_email_address">
                    <span class="text-danger !text-xs pi_email_address-error">
                    </span>
            </div>
            {{-- Cellphone Number --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Cellphone
                    Number</label>
                <input type="text"
                    class="form-control pi_celphone_number !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_celphone_number">
                    <span class="text-danger !text-xs pi_celphone_number-error">
                    </span>
            </div>
            {{-- Landline Number --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Landline
                    Number</label>
                <input type="text"
                    class="form-control pi_landine_number !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_landine_number">
                    <span class="text-danger !text-xs pi_landine_number-error">
                    </span>
            </div>
            {{-- GSIS/SSS Number --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">GSIS/SSS
                    Number</label>
                <input type="text"
                    class="form-control pi_sss_number !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_sss_number">
                    <span class="text-danger !text-xs pi_sss_number-error">
                    </span>
            </div>
            {{-- Pag-ibig Number --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">Pag-ibig
                    Number</label>
                <input type="text"
                    class="form-control pi_pag_ibig_number !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_pag_ibig_number">
                    <span class="text-danger !text-xs pi_pag_ibig_number-error">
                    </span>
            </div>
            {{-- PhilHealth Number --}}
            <div class="col-md-6 mb-4">
                <label for="inputEmail4"
                    class="form-label !text-xs !text-gray-400 fw-bold text-light-emphasis">PhilHealth
                    Number</label>
                <input type="text"
                    class="form-control pi_philheath_number !text-xs !py-2.5 !text-gray-500 border-light-emphasis"
                    id="pi_philheath_number">
                    <span class="text-danger !text-xs pi_philheath_number-error">
                    </span>
            </div>
            <div class="col-md-6 mb-4">
                {{-- Disability --}}
                <div class="col-md-12 mb-4">
                    <label for="inputEmail4"
                        class="form-label !text-xs !text-gray-400 text-light-emphasis">Disability</label>
                    <select
                        class="form-select disability pi_disability border-light-emphasis mb-2 !text-xs !py-2.5 !text-gray-500"
                        aria-label="Default select example">
                        <option value="" selected>Select disablity</option>
                        <option value="Visual">Visual</option>
                        <option value="Hearing">Hearing</option>
                        <option value="Speech">Speech</option>
                        <option value="Physical">Physical</option>
                        <option value="Others">Others, please specify: </option>
                    </select>
                    <span class="text-danger !text-xs pi_disability-error">
                    </span>
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
                                <input class="form-check-input employed border-light-emphasis pi_employed"
                                    type="radio" name="pi_employed" id="pi_employed"
                                    value="Employed">
                                <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                    for="exampleRadios1">
                                    Employed
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    class="form-check-input unemployed pi_employed border-light-emphasis"
                                    type="radio" name="pi_employed" id="pi_employed"
                                    value="Unemployed">
                                <label class="form-check-label !text-xs !py-2.5 !text-gray-500"
                                    for="exampleRadios2">
                                    Unemployed
                                </label>
                            </div>
                        </div>
                        <span class="text-danger !text-xs pi_employed-error">
                        </span>
                    </div>
                </div>
                {{-- Employed Status Type --}}
                <div class="col-md-12 mb-4 employed-status d-none">
                    <select
                        class="form-select  border-light-emphasis pi_employed_status  !text-xs !py-2.5 !text-gray-500"
                        aria-label="Default select example">
                        <option value="Wage Employed">Wage Employed</option>
                        <option value="Self Employed">Self Employed</option>
                    </select>
                    <span class="text-danger !text-xs pi_employed_status-error">
                    </span>
                </div>
                {{-- Unemployed Status Type --}}
                <div class="col-md-12 mb-4 unemployed-status d-none">
                    <select
                        class="form-select pi_unemployed_status unemployed-status-select border-light-emphasis !text-xs !py-2.5 !text-gray-500"
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
                    <span class="text-danger !text-xs pi_unemployed_status-error">
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>