<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //asignacion masiva con $guarded
    protected $guarded = ['id'];

    //relacion polimorfica
    public function commentable()
    {
        return $this->morphTo();
    }
}
