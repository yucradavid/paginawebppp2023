<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
$criteria = Criteria::find(1);

// Acceder a las evaluaciones relacionadas
$evaluations = $criteria->evaluations;

// Ahora, puedes iterar sobre las evaluaciones y acceder a sus atributos
foreach ($evaluations as $evaluation) {
    $comments = $evaluation->comments;
    $qualification = $evaluation->qualification;
    $state = $evaluation->state;
    // ... y así sucesivamente
}
