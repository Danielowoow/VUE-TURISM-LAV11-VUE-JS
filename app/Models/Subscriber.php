<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\Observers\SubscriberObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


#[ObservedBy([SubscriberObserver::class])]
class Subscriber extends Model
{
    use HasFactory, Notifiable; 

    protected $fillable = [
        'email',
        'name',
        'subscribed_at',
        'unsubscribed_at',
        'is_client',
        'client_since',
    ];

    public function lists()
    {
        return $this->belongsToMany(MailingList::class, 'list_subscriber')
            ->withTimestamps()
            ->withPivot('subscribed_at');
    }

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_subscriber')
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
