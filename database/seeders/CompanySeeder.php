<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name'=>'Company Center',
        ]);
        Company::create([
            'name'=>'Claro',
        ]);
        Company::create([
            'name'=>'Bitel',
        ]);
        Company::create([
            'name'=>'Movistar',
        ]);
        Company::create([
            'name'=>'Los urus',
        ]);
    }
}
