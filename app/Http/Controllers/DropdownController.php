<?php

// DropdownController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function index()
    {
        return view('dropdown.index');
    }
}

