<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncludedService extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
        //relacion una a muchos inversa tour
        public function tour(){
            return $this->belongsTo(Tour::class);
        }
}
