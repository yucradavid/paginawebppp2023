<?php

namespace App\Livewire\Forms;

use App\Models\Competitor;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CompetitorForm extends Form
{
    public ?competitor $competitor;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $code;

    #[Rule('required')]
    public $cycle;

    #[Rule('required')]
    public $cluster;

    public function setForm(Competitor $competitor)
    {
        $this->competitor = $competitor;
        $this->name = $competitor->name;
        $this->code = $competitor->code;
        $this->cycle = $competitor->cycle;
        $this->cluster = $competitor->cluster;
    }

    public function resetForm()
    {
        $this->reset();
    }
}
