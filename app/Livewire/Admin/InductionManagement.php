<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\InductionForm;
use App\Models\Competitor;
use App\Models\Induction;
use App\Models\Material;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class InductionManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public InductionForm $form;
    use Actions;

    // ...

public function render()
{
    $inductions = Induction::where('title', 'like', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate(6);

    $materials=Material::all();
        return view('livewire.admin.induction-management',compact('inductions','materials'));
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

        if (!isset($this->form->induction->id)) {
            Induction::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            $induction = Induction::find($this->form->induction->id);
            $induction->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Induction $induction)
    {
        $this->form->setForm($induction);
        $this->isOpen = true;

    }

    public function destroy(Induction $induction)
    {
        $induction->delete();
    }
}
