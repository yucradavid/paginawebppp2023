<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Group;
class ResultMain extends Component
{
    public function render()
    {
        $groups=Group::all(){}
        return view('livewire.admin.result-main');
    }
}
