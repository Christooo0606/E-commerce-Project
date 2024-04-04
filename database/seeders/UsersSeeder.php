<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear usuario administrador
        DB::table('users')->insert([
            'name' => 'Administrador',
            'lname' => null,
            'email' => '2123200391@soy.utj.edu.mx',
            'phoneno' => null,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Reemplaza 'password' con la contraseña deseada
            'role_as' => 1, // 1 para administrador, 0 para usuario normal
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Crear usuario normal
        DB::table('users')->insert([
            'name' => 'Usuario',
            'lname' => null,
            'email' => 'christooorv@gmail.com',
            'phoneno' => null,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Reemplaza 'password' con la contraseña deseada
            'role_as' => 0, // 1 para administrador, 0 para usuario normal
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
