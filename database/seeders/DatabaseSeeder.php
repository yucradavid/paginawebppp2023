<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Competitor;
use App\Models\Criteria;
use App\Models\Evaluation;
use App\Models\Induction;
use App\Models\Material;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        //Usuario administrador
        $this->call(UserSeeder::class);
        //$this->call(SupervisorSeeder::class);
        $this->call(PracticingSeeder::class);
        $this->call(PracticanteSeeder::class);
        Competitor::factory(10)->create();
        Induction::factory(10)->create();
        Material::factory(10)->create();
        Criteria::factory(10)->create();
        Evaluation::factory(10)->create();
    }
}
