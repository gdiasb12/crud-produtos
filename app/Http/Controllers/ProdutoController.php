<?php

namespace App\Http\Controllers;

use App\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        
        $produtos = Produto::latest()->get();
        return view('produtos.index',['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.form',[
            'method' => 'POST',
            'route' => route('produto.store'),

        ]);
    }

    public function store()
    {
        $this->validate(request(),[
            'titulo' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required|numeric',
            'valor' => 'required'
        ]);

        Produto::create(request()->all());
        return redirect(route('produto.index'));
    }

    public function show(Produto $produto)
    {
        //
    }

    public function edit(Produto $produto)
    {
        return view('produtos.form',[
            'method' => 'PUT',
            'route' => route('produto.update',$produto->id),
            'produto' => $produto]);
    }

    public function update(Produto $produto)
    {

        $this->validate(request(),[
            'titulo' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required|numeric',
            'valor' => 'required'
        ]);

        $produto->update(request()->all());
        return redirect(route('produto.index'));
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');

    }
}
