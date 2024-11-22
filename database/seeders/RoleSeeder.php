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
        $rolea=Role::create(['name'=>'Administrador']);
        $rolea->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);


        $rolem=Role::create(['name'=>'Maestro']);
        //$role->syncPermissions(['Listar clientes','Crear clientes','Editar clientes','Eliminar clientes']);
        $rolem->permissions()->attach([1,6,7,8,9,10,11,12,13,14]);

    }
}