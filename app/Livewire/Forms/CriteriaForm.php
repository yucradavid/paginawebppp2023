<?php

namespace App\Livewire\Forms;

use App\Models\Criteria;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CriteriaForm extends Form
{
    public ?Criteria $criteria;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $type;

    #[Rule('required')]
    public $question_description ;

    #[Rule('required')]
    public $importance_Criteria;

    public function setForm(Criteria $criteria)
    {
        $this->criteria = $criteria;
        $this->name = $criteria->name;
        $this->type = $criteria->type;
        $this->question_description = $criteria->question_description;
        $this->importance_Criteria = $criteria->importance_Criteria;
    }

    public function resetForm()
    {
        $this->reset();
    }
}
