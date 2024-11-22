<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Julmer Puma Condori',
            'email'=>'julmerpumacondori@gmail.com',
            'password'=>bcrypt('123456'),
        ]);
        $user->assignRole('Administrador');

        User::factory()->count(4)->create();
    }
}
