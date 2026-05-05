<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $valor;
    public $qtd_estoque;
    public $qtd_minima;
    public $produtoID;

    public function mount($id){
        $produto = Produto::find($id);
        if($produto == null){
            session()->flash('erro', 'não encontrado');
            return redirect()->route('produto.index');
        }
        $this->produtoID = $produto->id;
        $this-> nome = $produto->nome;
        $this-> valor = $produto->valor;
        $this-> qtd_estoque = $produto->qtd_estoque;
        $this-> qtd_minima = $produto->qtd_minima;
    }

    public function update(){
        $produto = Produto::find($this -> produtoID);

        if($produto == null){
            session()->flash('erro', 'produto não encontrado');
        }
        
        $produto->nome = $this->nome;
        $produto->valor = $this->valor;
        $produto->qtd_estoque = $this->qtd_estoque;
        $produto->qtd_minima = $this->qtd_minima;

        $produto->save();

        session()->flash('success', 'produto atualizado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
