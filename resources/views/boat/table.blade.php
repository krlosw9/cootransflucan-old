<h2>Listado de Embarcaciones</h2>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($boats as $boat)
            <tr>
                <td>{{ $boat->id }}</td>
                <td>{{ $boat->name }}</td>
                <td>{{ $boat->enrollment }}</td>
                <td>{{ $boat->brand_id }}</td>
                <td>{{ $boat->boat_type_id }}</td>
                <td>
                    <button wire:click="edit({{ $boat->id }})" class="btn btn-primary">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click="destroy({{ $boat->id }})" class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $boats->links() }}