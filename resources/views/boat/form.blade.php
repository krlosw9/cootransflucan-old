<div class="row">
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Nombre</label>
        <input wire:model="name" type="text" class="form-control" value="{{-- old('name') --}}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Matricula</label>
        <input wire:model="enrollment" type="text" class="form-control">
        @error('enrollment')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Marca</label>
        <input wire:model="brand_id" type="number" class="form-control">
        @error('brand_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Tipo de embarcación</label>
        <input wire:model="boat_type_id" type="number" class="form-control">
        @error('boat_type_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Casco</label>
        <input wire:model="shell" type="text" class="form-control">
        @error('shell')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Numero de Propiedad</label>
        <input wire:model="property_number" type="text" class="form-control">
        @error('property_number')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Potencia</label>
        <input wire:model="power" type="text" class="form-control">
        @error('power')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Linea</label>
        <input wire:model="line" type="text" class="form-control">
        @error('line')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>RPM</label>
        <input wire:model="rpm" type="text" class="form-control">
        @error('rpm')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Numero de serie</label>
        <input wire:model="serial_number" type="text" class="form-control">
        @error('serial_number')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Helice</label>
        <input wire:model="helix" type="text" class="form-control">
        @error('helix')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xs-12 col-md-6 col-lg-4 col-xl-12">
        <label>Pata</label>
        <input wire:model="paw" type="text" class="form-control">
        @error('paw')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    @if ($view == 'edit')
        <div class="mt-2">
            <label>Embarcación activa? </label>
            <input wire:model="active" type="checkbox" value="on">
        </div>
    @endif
</div>