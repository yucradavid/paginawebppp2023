<?php

namespace App\Livewire\Forms;

use App\Models\Practicante;
use App\Models\Practicing;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PracticingForm extends Form
{
    public ? Practicing $practicings;

    #[Rule('required|min:3')]
    public $name;

    //#[Rule('required|min:3')]
    //public $cellphone;


    public function setForm(Practicing $practicings){
        $this->practicings = $practicings;
        $this->name = $practicings->name;
        //$this->cellphone = $practicings->cellphone;

    }

    public function resetForm(){
        $this->reset();
    }
}
