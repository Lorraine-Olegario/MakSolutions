<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'cnpj' => '00.681.613/0001-31',
            'fantasy_name' => 'MAK SOLUTIONS',
            'social_reason' => 'MAK SOLUTIONS SISTEMAS DE IMPRESSAO LTDA',
            'cep' => '35162189',
            'street' => 'Avenida Jose Julio da Costa',
            'number' => '2080',
            'complement' => null,
            'neighborhood' => 'Ideal',
            'municipality' => 'Ipatinga',
            'uf' => 'MG',
            'email' => 'contato@maksolutions.com.br',
            'whatsapp_suporte' => '553138249060',
            'whatsapp_comercial' => '553138249060',
            'telephone_1' => '+55 (31) 3824-9060',
            'telephone_2' => null,
            'instagram' => null,
            'facebook' => null,
            'logo' => 'company/logo/logo.png',
        ]);
    }
}
