<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restriction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion muchos a muchos
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }
    
}
