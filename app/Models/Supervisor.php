<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded=['id'];
=======

    protected $guarded=['id'];

    public function practicing(){
        return $this->hasMany(practicing::class);
    }

>>>>>>> fe4d3ac28d7afafde8462314dd4c0f768d31a807
}
