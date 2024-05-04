<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    use HasFactory;

    /**
     * Los atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'email_type',
        'is_automatic',
        'actor_id',
        'status',
        'metadata',
        'error_message',
        'error_code',
    ];

    /**
     * Los atributos que deben ser convertidos
     *
     * @var array
     */
    protected $casts = [
        'is_automatic' => 'boolean',
        'metadata' => 'array', // Convierte metadata a un array de PHP
    ];

    /**
     * Definir relaciones
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function actor() 
    {
        return $this->belongsTo(User::class);
    }
}
