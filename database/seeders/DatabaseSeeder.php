<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Primero permisos y roles
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        //Usuario administrador
        $this->call(UserSeeder::class);


        // User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ChurchSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(DimensionSeeder::class);
        $this->call(IndicatorSeeder::class);
        $this->call(GroupSeeder::class);

        $this->call(MemberSeeder::class);


    }
}
