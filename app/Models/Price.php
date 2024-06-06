<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion uno a muchos hasMany
    // public function tours(){
    //     return $this->hasMany(Tour::class);
    // }
    

}
