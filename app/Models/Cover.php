<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Cover extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'title',
        'start_at',
        'end_at',
        'is_active',
        'description',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // Definir un accessor para 'image_path'
    public function getImagePathAttribute($value)
    {
        return Storage::url($value);
    }
}
