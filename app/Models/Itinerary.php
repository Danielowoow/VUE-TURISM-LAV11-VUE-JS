<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Especificando que start y end deben ser tratados como instancias de Carbon
    //protected $dates = ['start', 'end'];
    protected $casts = [
        'start' => 'datetime:H:i',
        'end' => 'datetime:H:i',
    ];
    //relacion una a muchos inversa tour
    public function tour(){
        return $this->belongsTo(Tour::class);
    }

}   
