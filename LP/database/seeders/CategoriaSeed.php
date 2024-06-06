<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    
public function run()
    {
  Categoria::insert(['nome' => 'Infantil', 'descricao' => 'teste']);
  Categoria::insert(['nome' => 'Adulto', 'descricao' => 'teste']);
    }
}
