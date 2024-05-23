<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::create([
            'nome_cliente' => 'Matheus Maicoul',
            'data_nasc' => '2004-12-22',
            'cpf' => '115.287.256-91',
        ]);
    }
}