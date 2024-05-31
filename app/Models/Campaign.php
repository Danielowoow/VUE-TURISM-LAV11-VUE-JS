<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject',
        'content',
        'sent_at',
    ];

    public function lists()
    {
        return $this->belongsToMany(MailingList::class, 'campaign_list');
    }

    public function subscribers()
    {
        return $this->belongsToMany(Subscriber::class, 'campaign_subscriber')
                    ->withTimestamps()
                    ->withPivot('status', 'sent_at');
    }

    public function bounces()
    {
        return $this->hasMany(Bounce::class);
    }

    public function opens()
    {
        return $this->hasMany(Open::class);
    }

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }
}
