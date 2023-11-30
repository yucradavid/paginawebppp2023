<?php

namespace App\Livewire\Forms;

use App\Models\User;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:4')]
    public $email;

    #[Rule('required|min:4')]
    public $password;

    public function setForm(User $user){
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    public function resetForm(){
        $this->reset();
    }
}
