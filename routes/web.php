<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Tarefa\Create;
use App\Livewire\Tarefa\Editar;
use App\Livewire\Tarefa\Index;
use Illuminate\Support\Facades\Route;

Route::get('/tarefa/create', Create::class)->name('tarefa.create');
Route::get('/tarefa', Index::class)->name('tarefa.index');
Route::get('/tarefa/editar', Editar::class)->name('tarefa.editar');

Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/produto', ProdutoIndex::class)->name('produto.index');
Route::get('/produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
