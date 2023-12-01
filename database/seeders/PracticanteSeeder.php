<?php

namespace Database\Seeders;

use App\Models\Practicante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Practicante::create([
            'practicante'=>'Pedro Porro',
            'supervisor'=>'ING.jenson chambi',
            'etapa'=>'1',
            'empresa'=>'backus',
            'cellphone'=>'942150837'
        ]);
        Practicante::create([
            'practicante'=>'Juan Porro',
            'supervisor'=>'ING.Angel SUllon',
            'etapa'=>'2',
            'empresa'=>'movistar',
            'cellphone'=>'933150837'
        ]);
        Practicante::create([
            'practicante'=>'Pedro Pablo',
            'supervisor'=>'ING.Angel Rosendo',
            'etapa'=>'1',
            'empresa'=>'backus',
            'cellphone'=>'907654321'
        ]);
        Practicante::create([
            'practicante'=>'Lucas Perez',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'3',
            'empresa'=>'leche gloria',
            'cellphone'=>'917654321'
        ]);
        Practicante::create([
            'practicante'=>'Luis Carlos',
            'supervisor'=>'ING.Francis',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'957654321'
        ]);
        Practicante::create([
            'practicante'=>'Mike ronal',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'927654321'
        ]);
        Practicante::create([
            'practicante'=>'Maria caceres',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'977654321'
        ]);
        Practicante::create([
            'practicante'=>'Carla torres',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'982654321'
        ]);
        Practicante::create([
            'practicante'=>'cristian roal',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'977654321'
        ]);
        Practicante::create([
            'practicante'=>'erick garcia',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'943254321'
        ]);
        Practicante::create([
            'practicante'=>'monica rodriguez',
            'supervisor'=>'ING.David Mamani',
            'etapa'=>'2',
            'empresa'=>'backus',
            'cellphone'=>'912654321'
        ]);
    }
}
