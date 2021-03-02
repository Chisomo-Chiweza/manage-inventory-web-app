<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_of_items'
    ];

    public function getNameAttribute($value) {

        return ucfirst($value);
    }

    public function getNumberOfItemsAttribute($value) {

        return ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function setNumberOfItemsAttribute($value)
    {
        $this->attributes['number_of_items'] = strtolower($value);
    }


}
