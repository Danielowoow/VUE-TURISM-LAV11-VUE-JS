<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion uno a muchos inversa user
    public function user(){
        return $this->belongsTo(User::class);
    }
    //relacion uno a muchos inversa tour
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
    
}
