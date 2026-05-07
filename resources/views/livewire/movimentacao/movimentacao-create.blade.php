<div>
    <div class="container">
        <div class="d-flex justify-content-between aling-itens-center mb-4">
            <h2 class="mb-0"> Gestão de estoque</h2>
            <div class="d-flex gap-2">
                <a href="{{ route('movimentacao.index') }}" class="btn btn-secundary">movimentações</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if ($alertaEstoqueBaixo)
            <div class="alert alert-warning">{{ $alertaEstoqueBaixo }}</div>
        @endif

        {{-- Formulario de movimentação --}}
        <div class="card mb-4">
            <div class="card-header">
                <h5>Registrar movimentação de estoque</h5>
            </div>
            <div class="card-body">
                <form wire:submit.prevent='store' action="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="">Produtos</label>
                                <select name="" class="form-select" wire:model='idProdutoSelecionado' id="idProdutoSelecionado">
                                    <option value="">Selecione um produto</option>
                                    @foreach ($produtos as $produto)
                                        <option value="{{$produto->id}}">
                                            {{$produto->nome}} (Estoque: {{$produto->qtd_estoque}})
                                        </option>
                                    @endforeach
                                </select>
                                @error('idProdutoSelecionado')
                                    <span>{{ $mensagem }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class='mb-3'>
                                <label class="form-label" for="">tipo</label>
                                <select name="" class="form-select " id="" wire:model='tipo'>
                                    <option class="form-select" value="entrada">entrada</option>
                                    <option class="form-select" value="saida">saida</option>
                                </select>
                                @error('tipo')
                                    <span class="text-danger">{{ $mensagem }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class='mb-3'>
                                <label class="" for="">quantidade</label>
                                <input type="number" class="form-control" wire:model='quantidade_movimentada'>
                                @error('quantidade_movimentada')
                                    <span class="text-danger">{{ $mensagem }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class='mb-3'>
                                <label  for="">data</label>
                                <input type="date" class="form-control" wire:model='data_movimentacao'>
                                @error('data')
                                    <span class="text-danger">{{ $mensagem }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit">enviar movimentação</button>
                </form>

            </div>
        </div>

        {{-- Lista de produtos --}}
        <div class="card">
            <div class="card-header">
                <h5>Produtos Cadastrados</h5>
            </div>
            <div class="card-body">
                <div class="table responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Estoque Atual</th>
                                <th>Estoque Minimo</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ number_format($produto->valor, 2, ',', '.') }}</td>
                                    <td>{{ $produto->qtd_estoque }}</td>
                                    <td>{{ $produto->qtd_minima }}</td>
                                    <td>
                                        @if ($produto->qtd_estoque < $produto->qtd_minima)
                                            <span class="badge bg-danger">Estoque Baixo</span>
                                        @elseif($produto->qtd_estoque == $produto->qtd_minima)
                                            <span class="badge bg-warning">Estoque Mínimo</span>
                                        @else
                                            <span class="badge bg-success">Normal</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        livewire.on('redirect', (data) => {
            windows.location.href = data.url;
        });
    </script>
    {{-- Stop trying to control. --}}
</div>
