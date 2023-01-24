<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicantMultiStepForm extends Component
{

    public $total_steps = 10;
    public $current_step = 1;
    public $surname;
    public $firstname;
    public $lastname;
    public $middle_name;
    public $suffix;
    public $birthdate;
    public $religion;
    public $sex;
    public $civil_status;
    public $height;

    public function mount() {
        $this->current_step = 1;
    }

    public function render()
    {
        return view('livewire.applicant-multi-step-form');
    }

    public function nextStep() 
    {
        // $this->resetErrorBag();
        // $this->validateData();
        $this->current_step++;
        if($this->current_step > $this->total_steps)
            $this->current_step = $this->total_steps;
            
    }

    public function prevStep() 
    {
        $this->current_step--;
        if($this->current_step < 1)
            $this->current_step = 1;
            
    }

    public function validateData() {
        if($this->current_step == 1) {
            $this->validate([
                'surname' => 'required',
                'firstname' => 'required',
                'middle_name' => 'required',
                'suffix' => 'required',
                'birthdate' => 'required',
                'religion' => 'required',
                'sex' => 'required',
                'civil_status' => 'required',
                'height' => 'required'
            ]);
        }
    }
}
