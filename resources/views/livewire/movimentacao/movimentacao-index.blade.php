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
                                    <td>{{ $movimentacao->data_movimentacao, 2, ',', '.' }}</td>
                                    <td>{{ $movimentacao->tipo }}</td>
                                    <td>{{ $movimentacao->produto_id }}</td>
                                    <td>{{ $movimentacao->user_id }}</td>
                                    <td><button type="button" class="btn btn-sm btn-danger">deletar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
