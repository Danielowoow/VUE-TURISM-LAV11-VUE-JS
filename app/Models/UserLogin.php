<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'user_logins';

    protected $fillable = [
        'user_id', 'ip_address', 'country', 'city', 'state', 'state_name'
    ];

    // Asegúrate de que 'created_at' sea manejado como una instancia de Carbon
    protected $dates = ['created_at'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

