<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CriteriaForm;
use App\Models\Criteria;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CriteriaManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public CriteriaForm $form;
    use Actions;

    // ...

public function render()
{
    $criterias = Criteria::where('name', 'like', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate(6);

    return view('livewire.admin.criteria-management', compact('criterias'));
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

        if (!isset($this->form->criteria->id)) {
            Criteria::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            $Criteria = Criteria::find($this->form->criteria->id);
            $Criteria->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Criteria $Criteria)
    {
        $this->form->setForm($Criteria);
        $this->isOpen = true;
    }

    public function destroy(Criteria $criteria)
    {
        $criteria->delete();
    }

}
