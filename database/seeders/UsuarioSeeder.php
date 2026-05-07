<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/* class UsuarioSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        User::create([
            'name' => 'Juan Perez',
            'dni' => '123',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'Maria Gomez',
            'dni' => '456',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'Carlos Lopez',
            'dni' => '789',
            'password' => '123456',
        ]);
    }
} */


class UsuarioSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        $cantidad = 10; // 👈 cambia aquí la cantidad de usuarios

        for ($i = 1; $i <= $cantidad; $i++) {
            User::create([
                'name' => 'Usuario ' . $i,
                'celular' => '7' . str_pad($i, 7, '0', STR_PAD_LEFT), // 70000001, 70000002...
                'dni' => '100' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'password' => Hash::make('123456'),
            ]);
        }
    }
}