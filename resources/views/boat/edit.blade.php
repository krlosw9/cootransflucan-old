<h2>Editar embarcación</h2>

@include('boat/form')

<button wire:click="update" class="btn btn-primary">
    Editar
</button>

<button wire:click="default" class="btn btn-link">
    Cancelar
</button>