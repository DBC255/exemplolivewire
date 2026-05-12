<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use App\Models\Produto;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    public function delete($id){
        $movimentacao = Movimentacao::find($id);
        if($movimentacao != null){
        $movimentacao->delete();
        session()->flash('success', 'excluido');
        }
    }
    
    public function render()
    {
        $movimentacoes = Movimentacao::all();
        return view('livewire.movimentacao.movimentacao-index', compact('movimentacoes'));
    }
}
