<?php

namespace App\Providers;

use App\Events\BClienteCreateEvent;
use App\Events\BClienteDestroyEvent;
use App\Events\BClienteEditEvent;
use App\Listeners\BClienteCreateListener;
use App\Listeners\BClienteDestroyListener;
use App\Listeners\BClienteEditListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        BClienteCreateEvent::class=> [
            BClienteCreateListener::class,
        ],
        BClienteDestroyEvent::class=> [
            BClienteDestroyListener::class,
        ],
        BClienteEditEvent::class=> [
            BClienteEditListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
