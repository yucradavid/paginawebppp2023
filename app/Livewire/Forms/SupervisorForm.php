<?php

namespace App\Livewire\Forms;

use App\Models\Practicante;
use App\Models\Supervisor;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SupervisorForm extends Form
{
    public ? Supervisor $supervisors;

    #[Rule('required|min:3')]
    public $name;



    public function setForm(Practicante $supervisors){
        $this->supervisors = $supervisors;
        $this->name = $supervisors->name;

    }

    public function resetForm(){
        $this->reset();
    }
}
