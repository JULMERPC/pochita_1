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
            //Dashb
            Permission::create([
                'name'=>'Ver dashboard'
            ]);
            //grupo
            Permission::create([
                'name'=>'Listar grupo'
            ]);
            Permission::create([
                'name'=>'Crear grupo'
            ]);
            Permission::create([
                'name'=>'Editar grupo'
            ]);
            Permission::create([
                'name'=>'Eliminar grupo'
            ]);
            //miembros
            Permission::create([
                'name'=>'Listar miembros'
            ]);
            Permission::create([
                'name'=>'Crear miembros'
            ]);
            Permission::create([
                'name'=>'Editar miembros'
            ]);
            Permission::create([
                'name'=>'Eliminar miembros'
            ]);

            //Registro
            Permission::create([
            'name'=>'Bucar grupo'
            ]);
            Permission::create([
            'name'=>'Registrar asistencia'
            ]);
            Permission::create([
            'name'=>'Regsitrar comunion'
            ]);
            Permission::create([
            'name'=>'Registrar relacion'
            ]);
            Permission::create([
            'name'=>'Registrar mision'
            ]);
        }
}