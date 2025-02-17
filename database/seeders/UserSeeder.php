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
        $user = new User();

        $user->name     = 'Manuel Henriquez';
        $user->email    = 'manuelhm1993@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();

        //------------------------------------ Crear 2 usuarios de prueba
        User::factory(2)->create();
    }
}
