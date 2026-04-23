<div class="mt-5">
    <form wire:submit.prevent='update' class="row g-3">
  <div class="col-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" wire:model='nome' class="form-control" id="nome">
  </div>
  <div class="col-12">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" wire:model='valor' class="form-control" id="valor">
  </div>
  <div class="col-md-12">
    <label for="qtd_estoque" class="form-label">Qtd. Estoque</label>
    <input type="text" wire:model='qtd_estoque' class="form-control" id="qtd_estoque">
  </div>
  <div class="col-md-12">
    <label for="qtd_minima" class="form-label">Qtd. minima</label>
    <input type="text" wire:model='qtd_minima' class="form-control" id="qtd_minima">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">salvar</button>
  </div>
</form>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
