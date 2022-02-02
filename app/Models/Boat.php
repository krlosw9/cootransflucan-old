<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'enrollment', 'brand_id', 'boat_type_id', 'shell', 
        'power', 'property_number', 'line', 'rpm', 'serial_number', 
        'helix', 'paw'
    ];
}
