<div class="mt-5">
    @if(@session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data e Hora</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tarefas as $t)
                    <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->nome }}</td>
                        <td>{{ \Carbon\Carbon::parse($t->data_hora)->format('d/m/Y H:1') }}</td>
                        <td>
                            <a href="{{ route('tarefa.editar', ['id=> $t->id'])}}" class="btn btn-primary btn-sm">Editar</a>
                            <button class="btn btn-danger btn-sm" wire:confirm="Deseja excluir a tarefa?">Excluir</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
