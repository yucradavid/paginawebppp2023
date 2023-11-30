<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class UserManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public $selectroles;
    public UserForm $form;
    use Actions;
    public function render()
    {
        $users=User::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        $roles=Role::all();
        return view('livewire.admin.user-management',compact('users','roles'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->user->id)){
            User::create([
                'name'=>$this->form->name,
                'email'=>$this->form->email,
                'password'=>Hash::make($this->form->password),
            ]);
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $user=User::find($this->form->user->id);
            $user->update([
                'name'=>$this->form->name,
                'email'=>$this->form->email,
                'password'=>Hash::make($this->form->password),

            ]);
            $user->roles()->sync(array_keys($this->selectroles,'true'));
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(User $user){
        //$this->form=$period->toArray();
        $this->form->setForm($user);
        $this->isOpen=true;
        $this->selectroles=array_fill_keys($user->roles->pluck('id')->toArray(), true);
    }

    public function destroy(User $user){
        $user->delete();
    }
}
