<?php

namespace App\Jobs\Public\Newsletter;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


use App\Models\Subscriber;
use App\Notifications\Public\Newsletter\UserSubscribedNotification;
use Illuminate\Support\Facades\Log;

class UserSubscribedNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $subscriber;

    /**
     * Create a new job instance.
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Log::info('Job para UserSubscribedNotification iniciado.');
        $this->subscriber->notify(new UserSubscribedNotification($this->subscriber));
    }
}
