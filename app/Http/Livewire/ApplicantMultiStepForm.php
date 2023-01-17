<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplicantMultiStepForm extends Component
{

    public $total_steps = 3;
    public $current_step = 1;
    public $sample = "<p>Sample</p>";

    public function mount() {
        $this->current_step = 1;
    }

    public function render()
    {
        return view('livewire.applicant-multi-step-form');
    }

    public function nextStep() 
    {
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
}
