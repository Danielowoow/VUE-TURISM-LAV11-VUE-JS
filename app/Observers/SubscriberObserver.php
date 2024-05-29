<?php

namespace App\Observers;

use App\Models\Subscriber;


use App\Jobs\Public\Newsletter\UserSubscribedNotificationJob;
use App\Jobs\Public\Newsletter\NonUserSubscribedNotificationJob;
use Illuminate\Support\Facades\Log;


class SubscriberObserver
{
    /**
     * Handle the Subscriber "created" event.
     */
    public function created(Subscriber $subscriber): void
    {
        Log::info('Subscriber creado: ' . $subscriber->email);

        // Despachar el job dependiendo si es cliente o no
        if ($subscriber->is_client) {
            Log::info('Es cliente, despachando UserSubscribedNotificationJob');
            UserSubscribedNotificationJob::dispatch($subscriber);
        } else {
            Log::info('No es cliente, despachando NonUserSubscribedNotificationJob');
            NonUserSubscribedNotificationJob::dispatch($subscriber);
        }
    }

    /**
     * Handle the Subscriber "updated" event.
     */
    public function updated(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "deleted" event.
     */
    public function deleted(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "restored" event.
     */
    public function restored(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "force deleted" event.
     */
    public function forceDeleted(Subscriber $subscriber): void
    {
        //
    }
}
