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
    public $name, $enrollment, $brand_id, $boat_type_id, $shell, $power;
    public $property_number, $line, $rpm, $serial_number, $helix, $paw, $active;

    public $rules = [
        'name' => 'required',
        'enrollment' => 'required',
        'brand_id' => 'required',
        'boat_type_id' => 'required',
        'shell' => 'required',
        'power' => 'required',
        'property_number' => 'required',
        'line' => 'required',
        'rpm' => 'required',
        'serial_number' => 'required',
        'helix' => 'required',
        'paw' => 'required'
    ];
    
    public function render()
    {
        return view('livewire.boat-component', [
            'boats' => Boat::orderBy('id', 'desc')->paginate(8)
        ]);
    }

    public function store()
    {
        $this->validate($this->rules);

        Boat::create([
            'name' => $this->name,
            'enrollment' => $this->enrollment,
            'brand_id' => $this->brand_id,
            'boat_type_id' => $this->boat_type_id,
            'shell' => $this->shell,
            'power' => $this->power,
            'property_number' => $this->property_number,
            'line' => $this->line,
            'rpm' => $this->rpm,
            'serial_number' => $this->serial_number,
            'helix' => $this->helix,
            'paw' => $this->paw
        ]);
    }

    
}
