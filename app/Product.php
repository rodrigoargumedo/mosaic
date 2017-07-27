<?php

namespace Mosaic;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Whitelist the ones that are acceptable from the model
    protected $fillable = ['name', 'description', 'price'];
}
