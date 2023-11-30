<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=Role::create(['name'=>'Administrador']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9]);

        $role=Role::create(['name'=>'Supervisor']);
        $role->syncPermissions([1,2,3,4,5]);

        $role=Role::create(['name'=>'Estudiante']);
        $role->syncPermissions(['Listar empresas','Solicitar carta','Subir Documentos','Eliminar documentos']);

    }
}
