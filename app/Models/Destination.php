<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
        //asignacion masiva con $guarded
    protected $guarded = ['id'];
    //relacion muchos a muchos
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }
}
