<?php

namespace Database\Seeders;

use App\Models\Phone;
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
        //------------------------------------ Crear el usuario principal con su teléfono asociado
        User::factory()
            ->has(Phone::factory()->count(1))
            ->create([
                'name'     => 'Manuel Henriquez',
                'email'    => 'manuelhm1993@gmail.com',
                'password' => bcrypt('12345678'),
            ]);

        //------------------------------------ Crear 10 usuarios de prueba con su teléfono asociado
        User::factory(10)->has(Phone::factory()->count(1), 'phone')->create();
    }
}
