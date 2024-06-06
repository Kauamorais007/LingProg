<?php

namespace Database\Seeders;
use App\Models\produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
  Produto::insert(['nome_produto' => 'Nike Air Jordan 4 Preto/branco', 'valor' => '779.99', 'categoria_id'=> '2']);
  Produto::insert(['nome_produto' => 'Nike Air Jordan 4 Vermelho/Preto', 'valor' => '799.99', 'categoria_id'=> '2']);
    }
}
