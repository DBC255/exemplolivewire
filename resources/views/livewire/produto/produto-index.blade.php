<div class="mt-5">
  @if (session()->has('erro'))
  <div class="alert alert-danger">
    {{ session('erro') }}
  </div>
  @endif

  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
    <div class="mb-3">
      <input type="text" wire:model.live='search' placeholder="pesquisar..." class="form-control mb-4">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Qtd. Estoque</th>
      <th scope="col">Qtd. Minima</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produtos as $p)
    <tr>
      <th>{{ $p->id }}</th>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->qtd_estoque }}</td>
      <td>{{ $p->qtd_minima }}</td>
      <td><a href="{{ route('produto.edit', ['id' => $p->id]) }}" class="btn btn-sm btn-info">edit</a></td>
      <td><button wire:click='delete({{ $p->id }})' class="btn btn-sm btn-danger">delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
