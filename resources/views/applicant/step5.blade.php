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