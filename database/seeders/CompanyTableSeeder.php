<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            'cnpj' => '12.345.678/0001-90',
            'fantasy_name' => 'Empresa Exemplo LTDA',
            'social_reason' => 'Empresa Exemplo Ltda. - Comércio de Exemplos',
            'cep' => '12345-678',
            'street' => 'Rua Exemplo',
            'number' => '123',
            'complement' => 'Apto 45',
            'neighborhood' => 'Bairro Exemplo',
            'municipality' => 'Cidade Exemplo',
            'uf' => 'EX',
            'email_1' => 'contato@empresaexemplo.com',
            'email_2' => 'suporte@empresaexemplo.com',
            'telephone_1' => '(12) 3456-7890',
            'telephone_2' => '(12) 3456-7891',
            'instagram' => 'empresaexemplo',
            'facebook' => 'empresaexemplo',
            'twitter' => 'empresaexemplo',
            'logo' => 'logo.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
