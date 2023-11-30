<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CompetitorForm;
use App\Models\Competitor;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CompetitorManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public CompetitorForm $form;
    use Actions;

    // ...

public function render()
{
    $competitors = competitor::where('name', 'like', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate(6);

    return view('livewire.admin.competitor-management', compact('competitors'));
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

        if (!isset($this->form->competitor->id)) {
            competitor::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            $competitor = competitor::find($this->form->competitor->id);
            $competitor->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Competitor $competitor)
    {
        $this->form->setForm($competitor);
        $this->isOpen = true;
    }

    public function destroy(competitor $competitor)
    {
        $competitor->delete();
    }
}
