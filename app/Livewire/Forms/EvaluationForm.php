<?php

namespace App\Livewire\Forms;

use App\Models\Evaluation;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EvaluationForm extends Form
{
    public ?Evaluation $Evaluation;

    #[Rule('required')]
    public $comments;

    #[Rule('required')]
    public $qualification;

    #[Rule('required')]
    public $state ;

    #[Rule('required')]
    public $competitor_id;

    #[Rule('required')]
    public $evaluation_date;




    public function setForm(Evaluation $Evaluation)
    {
        $this->Evaluation = $Evaluation;
        $this->comments = $Evaluation->comments;
        $this->qualification = $Evaluation->qualification;
        $this->state = $Evaluation->state;

        $this->competitor_id = $Evaluation->competitor_id;
        $this->evaluation_date = $Evaluation->evaluation_date;
    }

    public function resetForm()
    {
        $this->reset();
    }
}
