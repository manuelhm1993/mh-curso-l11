<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //------------------------------------ Crear el usuario principal
        User::factory()->create([
            'name'     => 'Manuel Henriquez',
            'email'    => 'manuelhm1993@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        //------------------------------------ Crear 2 usuarios de prueba
        User::factory(10)->create();
    }
}
