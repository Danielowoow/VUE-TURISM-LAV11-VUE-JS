<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    //asignacion masiva con $guarded
    protected $guarded = ['id'];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
