<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Adicionando um usuário padrão
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'lorraineolegario16@gmail.com',
            // 'email' => 'wallace@maksolutions.com.br',
            'password' => Hash::make('password123'), // Lembre-se de usar uma senha segura
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
