<?php

namespace App\Observers;

use App\Models\Deposit;

class DepositObserver
{
    /**
     * Handle the Deposit "created" event.
     */
    public function created(Deposit $deposit): void
    {
        // If deposit is created with 'confirmed' status, process immediately
        if ($deposit->status === 'confirmed') {
            $balanceService = app(\App\Services\BalanceService::class);
            
            $balanceService->credit(
                $deposit->user,
                $deposit->amount_usd,
                'deposit',
                [
                    'deposit_id' => $deposit->id,
                    'tx_hash' => $deposit->tx_hash,
                    'amount_btc' => $deposit->amount_btc,
                ]
            );

            $deposit->confirmed_at = now();
            $deposit->saveQuietly();
        }
    }

    /**
     * Handle the Deposit "updated" event.
     */
    public function updated(Deposit $deposit): void
    {
        if ($deposit->isDirty('status') && $deposit->status === 'confirmed' && $deposit->getOriginal('status') !== 'confirmed') {
            $balanceService = app(\App\Services\BalanceService::class);
            
            $balanceService->credit(
                $deposit->user,
                $deposit->amount_usd,
                'deposit',
                [
                    'deposit_id' => $deposit->id,
                    'tx_hash' => $deposit->tx_hash,
                    'amount_btc' => $deposit->amount_btc,
                ]
            );

            $deposit->confirmed_at = now();
            $deposit->saveQuietly();
        }
    }

    /**
     * Handle the Deposit "deleted" event.
     */
    public function deleted(Deposit $deposit): void
    {
        //
    }

    /**
     * Handle the Deposit "restored" event.
     */
    public function restored(Deposit $deposit): void
    {
        //
    }

    /**
     * Handle the Deposit "force deleted" event.
     */
    public function forceDeleted(Deposit $deposit): void
    {
        //
    }
}
