<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('layouts.produtos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    dd($request);
    
    // Cadastrar no banco de dados na tabela produtos os valores de todos os campos
    Produto::create($request->all());

    // Redirecionar o usuário, enviar a mensagem de sucesso
    return redirect()->route('mostrarProduto')->with('success', 'Produto cadastrado com sucesso');
}

    /**
     * Display the specified resource.
     */
    public function show(produto $produto)
    {
        //$categoria=$produto->categoria;

        return view('produtos');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        //
    }
    
}
