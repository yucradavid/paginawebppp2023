<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  //Dashboard
  Permission::create([
    'name'=>'Ver dashboard'
]);

//administrador
Permission::create([
    'name'=>'editar usuarios'
]);
Permission::create([
    'name'=>'Crear usuarios'
]);
Permission::create([
    'name'=>'eliminar usuarios'
]);

Permission::create([
    'name'=>'listar usuario'
]);

//Estudiante
Permission::create([
    'name'=>'Listar empresas'
]);
Permission::create([
    'name'=>'Solicitar carta'
]);
Permission::create([
    'name'=>'Subir Documentos'
]);
Permission::create([
    'name'=>'Eliminar documentos'
]);

// supervisor
Permission::create([
    'name'=>'Listar progreso'
]);
    }
}


