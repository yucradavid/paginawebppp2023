<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicing extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function supervisor(){
        return $this->belongsTo(supervisor::class);
    }
}
