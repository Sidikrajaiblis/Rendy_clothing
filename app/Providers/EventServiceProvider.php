<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\Aktivitas;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    public function boot()
    {
        parent::boot();

        Event::listen(Login::class, function ($event) {
            Aktivitas::create([
                'pesan' => $event->user->name . ' berhasil login',
            ]);
        });

        Event::listen(Logout::class, function ($event) {
            Aktivitas::create([
                'pesan' => $event->user->name . ' logout',
            ]);
        });
    }

    public function shouldDiscoverEvents()
    {
        return false;
    }
}
