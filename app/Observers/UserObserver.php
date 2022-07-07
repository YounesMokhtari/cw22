<?php

namespace App\Observers;

use App\Mail\UserMail;
use App\Models\User;
use App\Notifications\DummyNotif;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {

        // Mail::raw('Hello, welcome to Laravel!', function ($message)use($user) {
        //     $message
        //         ->to($user->email)
        //         ->subject('you are register successfully');
        // });
        // Mail::to($user)->send(new UserMail($user));
       $user->notify(new DummyNotif($user));


    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
