<div class="mt-5">
    <div class="card">
        <h5 class="card-header">Cadastro de Tarefas</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome" placeholder="Ex: estudar">
                </div>

                <div class="mb-3">
                    <label for="data_hora" class="form-label">Data_hora</label>
                    <input type="datetime-local" class="form-control" name="data_hora" id="data_hora" wire:model="data_hora">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descricao</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="4" wire:model="descricao"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
