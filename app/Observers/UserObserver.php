<?php

namespace App\Observers;

use App\Models\User;
use App\Models\AccountBalance;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // Only create AccountBalance for non-admin users
        if ($user->role !== 'admin') {
            AccountBalance::create([
                'user_id' => $user->id,
                'principal_amount' => 0.00,
                'current_balance' => 0.00,
            ]);
        }
    }
}
