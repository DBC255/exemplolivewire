<div class="mt-5">
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
      <td><a href="" class="btn btn-primary">edit</a></td>
      <td><button class="btn btn-danger">delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
