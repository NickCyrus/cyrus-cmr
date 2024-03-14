<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use App\Mail\CreateUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUserCreated  $event
     * @return void
     */
    public function handle(NewUserCreated $event)
    {
         
        
        Mail::to('info@diarioprogramador.com')->send(new CreateUser($event));
    }
}
