<?php

namespace App\Http\Livewire;

use App\Http\Requests\BoatRequest;
use App\Models\Boat;
use Livewire\Component;
use Livewire\WithPagination;

class BoatComponent extends Component
{   
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $view = 'create';
    public $boat_id, $name, $enrollment, $brand_id, $boat_type_id, $shell, $power;
    public $property_number, $line, $rpm, $serial_number, $helix, $paw, $active;
    
    public function render()
    {
        return view('livewire.boat-component', [
            'boats' => Boat::orderBy('id', 'desc')->paginate(14)
        ]);
    }

    public function store()
    {
        $validationRules = new BoatRequest();
        $this->validate($validationRules->rules());

        $boat = Boat::create([
            'name'              => $this->name,
            'enrollment'        => $this->enrollment,
            'brand_id'          => $this->brand_id,
            'boat_type_id'      => $this->boat_type_id,
            'shell'             => $this->shell,
            'power'             => $this->power,
            'property_number'   => $this->property_number,
            'line'              => $this->line,
            'rpm'               => $this->rpm,
            'serial_number'     => $this->serial_number,
            'helix'             => $this->helix,
            'paw'               => $this->paw
        ]);

        $this->edit($boat->id);
    }

    public function edit(Int $id)
    {
        $boat = Boat::find($id);

        if($boat != null)
        {
            $this->boat_id          = $boat->id;

            $this->name             = $boat->name;
            $this->enrollment       = $boat->enrollment;
            $this->brand_id         = $boat->brand_id;
            $this->boat_type_id     = $boat->boat_type_id;
            $this->shell            = $boat->shell;
            $this->power            = $boat->power;
            $this->property_number  = $boat->property_number;
            $this->line             = $boat->line;
            $this->rpm              = $boat->rpm;
            $this->serial_number    = $boat->serial_number;
            $this->helix            = $boat->helix;
            $this->paw              = $boat->paw;
            $this->active           = $boat->active;

            $this->view             = 'edit';
        }
    }

    public function update()
    {
        $validationRules = new BoatRequest();
        $this->validate($validationRules->rules());

        $boat = Boat::find($this->boat_id);

        $boat->update([
            'name'              => $this->name,
            'enrollment'        => $this->enrollment,
            'brand_id'          => $this->brand_id,
            'boat_type_id'      => $this->boat_type_id,
            'shell'             => $this->shell,
            'power'             => $this->power,
            'property_number'   => $this->property_number,
            'line'              => $this->line,
            'rpm'               => $this->rpm,
            'serial_number'     => $this->serial_number,
            'helix'             => $this->helix,
            'paw'               => $this->paw,
            'active'            => $this->active
        ]);

        $this->default();
    }

    public function destroy(Int $id)
    {
        Boat::destroy($id);
    }

    public function default()
    {
        $this->reset('name','enrollment','brand_id','boat_type_id','shell', 'power', 
        'property_number','line', 'rpm', 'serial_number', 'helix', 'paw', 'active', 'view');
    }
    
}
