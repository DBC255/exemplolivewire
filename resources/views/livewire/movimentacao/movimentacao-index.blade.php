<div>
 <div class="card">
            <div class="card-header">
                <h5>movimentações cadastradas Cadastrados</h5>
            </div>
            <div class="card-body">
                <div class="table responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>quantidade</th>
                                <th>data movimentacao</th>
                                <th>tipo</th>
                                <th>produto id</th>
                                <th>user id</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimentacoes as $movimentacao)
                                <tr>
                                    <td>{{ $movimentacao->quantidade }}</td>
                                    <td>{{ \Carbon\Carbon::parse($movimentacao->data_movimentacao)->format('d/m/Y') }}</td>
                                    <td> @if($movimentacao->tipo =='entrada')
                                        <span class="badge bg-primary">Entrada</span>  
                                        @else
                                        <span class="badge bg-danger">Saida</span>
                                        @endif
                                    </td>
                                    <td>{{ $movimentacao->produto->nome }}</td>
                                    <td>{{ $movimentacao->user->name }}</td>
                                    <td><button type="button" wire:click='delete({{ $movimentacao->id }})' class="btn btn-sm btn-danger">deletar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
