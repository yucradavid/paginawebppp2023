<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Induction extends Model
{use HasRoles;
    use HasFactory;
    protected $guarded=['id'];
    public function material(){
        return $this->belongsTo(material::class);
    }
    public function competitor()
    {
        return $this->belongsTo(Competitor::class);
    }
}
