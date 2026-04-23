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

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
