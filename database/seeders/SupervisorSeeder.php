<?php

namespace Database\Seeders;

use App\Models\Supervisor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supervisor::create([
            'name'=>'ING.Jenson Chambi',
        ]);
        Supervisor::create([
            'name'=>'ING.Angel Rsendo',
        ]);
        Supervisor::create([
            'name'=>'ING.Francis',
        ]);
        Supervisor::create([
            'name'=>'ING.Angel Sullon',
        ]);
        Supervisor::create([
            'name'=>'ING.David Manani',
        ]);
    }

}
