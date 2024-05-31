<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function subscribers()
    {
        return $this->belongsToMany(Subscriber::class, 'list_subscriber')
                    ->withTimestamps()
                    ->withPivot('subscribed_at');
    }

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_list');
    }
}
