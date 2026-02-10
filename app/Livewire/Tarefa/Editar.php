<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Editar extends Component
{
    public $nome;
    public $data_hora;
    public $descricao;
    public $tarefaId;

    public function mount($id){
        $tarefa = Tarefa::find($id);

        $this->tarefaId = $tarefa->id;
        $this->nome = $tarefa->nome;
        $this->data_hora = $tarefa->data_hora;
        $this->descricao = $tarefa->descricao;
    }

    public function update(){
        $tarefa = Tarefa::find($this->tarefaId);

        $tarefa ->nome = $this->nome;
        $tarefa ->data_hora = $this->data_hora;
        $tarefa ->descricao = $this->descricao;

        $tarefa->update();
        session()->flash('success', 'atualizado');
    }

    public function render()
    {
        return view('livewire.tarefa.editar');
    }
}
