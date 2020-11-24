<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_category', 'id');
    }
}
