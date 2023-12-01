<?php

namespace Database\Seeders;

use App\Models\Practicing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Practicing::create([
            'name'=>'Pedro Lucas Porro',
            'stage'=>'primera',
            'company'=>'backus',
            'cellphone'=>'973120634'

        ]);
        Practicing::create([
            'name'=>'Juan Porro',
            'stage'=>'segunda',
            'company'=>'movistar',
            'cellphone'=>'945120634'

        ]);
        Practicing::create([
            'name'=>'Pedro Pablo',
            'stage'=>'primera',
            'company'=>'backus',
            'cellphone'=>'933120634'

        ]);
        Practicing::create([
            'name'=>'Lucas Perez',
            'stage'=>'segunda',
            'company'=>'leche gloria',
            'cellphone'=>'979120634'

        ]);
        Practicing::create([
            'name'=>'Luis Carlos',
            'stage'=>'primera',
            'company'=>'backus',
            'cellphone'=>'987654321'

        ]);
        Practicing::create([
            'name'=>'Mike ronal',
            'stage'=>'primera',
            'company'=>'backus',
            'cellphone'=>'903120634'

        ]);
        Practicing::create([
            'name'=>'Maria caceres',
            'stage'=>'segunda',
            'company'=>'backus',
            'cellphone'=>'910120633'

        ]);
        Practicing::create([
            'name'=>'Carla torres',
            'stage'=>'tercera',
            'company'=>'backus',
            'cellphone'=>'91520634'

        ]);
        Practicing::create([
            'name'=>'cristian roal',
            'stage'=>'tercera',
            'company'=>'backus',
            'cellphone'=>'911120634'

        ]);
        Practicing::create([
            'name'=>'erick garcia',
            'stage'=>'primera',
            'company'=>'backus',
            'cellphone'=>'993120634'

        ]);
        Practicing::create([
            'name'=>'monica rodriguez',
            'stage'=>'segunda',
            'company'=>'backus',
            'cellphone'=>'953120634'

        ]);
    }
}
