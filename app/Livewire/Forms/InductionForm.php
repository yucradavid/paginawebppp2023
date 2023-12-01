<?php

namespace App\Livewire\Forms;

use App\Models\Induction;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InductionForm extends Form
{
    public ?induction $induction;

    #[Rule('required')]
    public $date;

    #[Rule('required')]
    public $location;

    #[Rule('required')]
    public $time;

    #[Rule('required')]
    public $responsible;

    #[Rule('required')]
    public $duration;


    #[Rule('required|url')]
     public $link;

     #[Rule('required|url')]
     public $file_type;

     #[Rule('required|')]
     public $title;
    //  #[Rule('required')]
      public $material_id;
    //  #[Rule('required')]
    //  public $competitor_id;


    public function setForm(Induction $induction)
    {

        $this->induction = $induction;
        $this->date = $induction->date;
        $this->title = $induction->title;
        $this->location = $induction->location;
        $this->time = $induction->time;
        $this->responsible = $induction->responsible;
        $this->duration = $induction->duration;

         $this->link = $induction->link;
         $this->file_type = $induction->file_type;
        //  $this->material_id = $induction->material_id;
        //  $this->competitor_id = $induction->competitor_id;
    }

    public function resetForm()
    {
        $this->reset();
    }
}
