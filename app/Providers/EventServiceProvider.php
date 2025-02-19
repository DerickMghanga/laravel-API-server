<?php

namespace App\Providers;

use App\Events\Models\User\UserCreated;
use App\Listeners\SendWelcomeEmail;
use App\Subscribers\Models\UserSubscriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // UserCreated::class => [SendWelcomeEmail::class],
    ];

    protected $subscribe = [
        UserSubscriber::class
    ];

    // /**
    //  * Register services.
    //  */
    // public function register(): void
    // {
    //     //
    // }

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
