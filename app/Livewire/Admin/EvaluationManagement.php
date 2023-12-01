<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\EvaluationForm;
use App\Models\Criteria;
use App\Models\Evaluation;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class EvaluationManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public EvaluationForm $form;
    use Actions;

    // ...

public function render()
{
    $evaluations = Evaluation::where('comments', 'like', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate(6);

    $criterias=Criteria::all();
        return view('livewire.admin.evaluation-management',compact('evaluations','criterias'));
}

// ...


    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if (!isset($this->form->Evaluation->id)) {
            Evaluation::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            $Evaluation = Evaluation::find($this->form->Evaluation->id);
            $Evaluation->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Evaluation $Evaluation)
    {
        $this->form->setForm($Evaluation);
        $this->isOpen = true;

    }

    public function destroy(Evaluation $Evaluation)
    {
        $Evaluation->delete();
    }
}

