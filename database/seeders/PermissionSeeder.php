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

//Supervisor
Permission::create([
    'name'=>'Listar estudiantes'
]);
Permission::create([
    'name'=>'Crear estudiantes'
]);
Permission::create([
    'name'=>'Editar estudiantes'
]);
Permission::create([
    'name'=>'Eliminar estudiantes'
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
    }
}
