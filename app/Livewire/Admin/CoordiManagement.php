<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\PracticanteForm;
use App\Livewire\Forms\SeasonForm;
use App\Models\Practicante;
use App\Models\Practicing;
use App\Models\Season;
use App\Models\Supervisor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use WireUi\Traits\Actions;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;



class CoordiManagement extends Component
{
    use WithPagination;

    public $isOpen=false;
    public $search;
    public PracticanteForm $form;
    use Actions;


    public function render()
    {   $practicantes=Practicante::where('practicante','LIKE','%'.$this->search.'%')->paginate();
        $practicings=Practicing::all();
        $supervisors=Supervisor::all();
        return view('livewire.admin.coordi-management',compact('practicantes','supervisors','practicings'));

    }

    public function generateReport(){
        $practicantes=Practicante::where('practicante','LIKE','%'.$this->search.'%')->paginate();
        $supervisors=Supervisor::all();

        $pdf = FacadePdf::loadView('reports.voting-result',compact('practicantes','supervisors'));
        return $pdf->stream('practicantes_lista.pdf'); //para descargar es download en ves de stream(que es stream)asi =
        //return $pdf->download('practicantes_lista.pdf');
    }

    public function generateReport2(){
        $practicantes=Practicante::where('practicante','LIKE','%'.$this->search.'%')->paginate();
        $supervisors=Supervisor::all();

        $pdf = FacadePdf::loadView('reports.voting-result2',compact('practicantes','supervisors'));
        return $pdf->stream('practicantes_lista.pdf'); //para descargar es download en ves de stream(que es stream)asi =
        //return $pdf->download('practicantes_lista.pdf');
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->practicante->id)){
            Practicante::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $practicante=Practicante::find($this->form->practicante->id);
            $practicante->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Practicante $practicante)
    {
        $this->form->setForm($practicante);
        $this->isOpen = true;

    }

    public function destroy(Practicante $practicante){
        $practicante->delete();
    }





}




