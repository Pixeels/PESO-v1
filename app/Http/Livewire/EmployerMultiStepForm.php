<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployerMultiStepForm extends Component
{
    public $total_steps = 5;
    public $current_step = 1;

    public function render()
    {
        return view('livewire.employer-multi-step-form');
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
}
