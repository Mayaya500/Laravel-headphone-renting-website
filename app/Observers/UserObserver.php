<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function created(User $user): void {
        $user->assignRole(config('auth.roles.user'));
    }

    public function updated(User $user): void
    {
        //
    }

    public function deleted(User $user): void
    {
        //
    }

    public function restored(User $user): void
    {
        //
    }
}
