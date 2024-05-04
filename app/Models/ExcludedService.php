<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcludedService extends Model
{
    use HasFactory;
        //asignacion masiva con $guarded
        protected $guarded = ['id'];
        //relacion una a muchos inversa tour
        public function tour(){
            return $this->belongsTo(Tour::class);
        }
        
}
