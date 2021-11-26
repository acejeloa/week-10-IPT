<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['name','description', 'value', 'status'];

    protected $table = 'inventory';
}
