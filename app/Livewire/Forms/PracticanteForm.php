<?php

namespace App\Livewire\Forms;

use App\Models\Practicante;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PracticanteForm extends Form
{
    public ? Practicante $practicantes;

    #[Rule('required|min:3')]
    public $practicante;

    #[Rule('required|min:3')]
    public $supervisor;

    #[Rule('required|min:1')]
    public $etapa;

    #[Rule('required|min:3')]
    public $empresa;

    #[Rule('required|min:3')]
    public $cellphone;

    public function setForm(Practicante $practicantes){
        $this->practicantes = $practicantes;
        $this->practicante = $practicantes->practicante;
        $this->supervisor = $practicantes->supervisor;
        $this->etapa = $practicantes->etapa;
        $this->empresa = $practicantes->empresa;
        $this->cellphone = $practicantes->cellphone;
    }

    public function resetForm(){
        $this->reset();
    }
}
