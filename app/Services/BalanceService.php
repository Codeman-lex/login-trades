<?php

namespace App\Services;

use App\Models\User;
use App\Models\AccountBalance;
use App\Models\TransactionLog;
use Illuminate\Support\Facades\DB;

class BalanceService
{
    public function getUserBalance(User $user): AccountBalance
    {
        return $user->accountBalance()->firstOrCreate([
            'user_id' => $user->id
        ], [
            'principal_amount' => 0,
            'current_balance' => 0,
        ]);
    }

    public function credit(User $user, float $amount, string $type, array $meta = []): AccountBalance
    {
        return DB::transaction(function () use ($user, $amount, $type, $meta) {
            $balance = $this->getUserBalance($user);

            $balance->current_balance += $amount;
            
            if ($type === 'deposit') {
                $balance->principal_amount += $amount;
            }

            $balance->save();

            TransactionLog::create([
                'user_id' => $user->id,
                'type' => $type,
                'amount' => $amount,
                'balance_after' => $balance->current_balance,
                'meta' => $meta,
            ]);

            return $balance;
        });
    }

    public function debit(User $user, float $amount, string $type, array $meta = []): AccountBalance
    {
        return DB::transaction(function () use ($user, $amount, $type, $meta) {
            $balance = $this->getUserBalance($user);

            if ($balance->current_balance < $amount) {
                throw new \Exception("Insufficient funds");
            }

            $balance->current_balance -= $amount;
            $balance->save();

            TransactionLog::create([
                'user_id' => $user->id,
                'type' => $type,
                'amount' => -$amount,
                'balance_after' => $balance->current_balance,
                'meta' => $meta,
            ]);

            return $balance;
        });
    }

    /**
     * Silent balance edit - does NOT create transaction log
     * Use for manual corrections/adjustments
     */
    public function silentEdit(User $user, float $newBalance): AccountBalance
    {
        return DB::transaction(function () use ($user, $newBalance) {
            $balance = $this->getUserBalance($user);
            $balance->current_balance = $newBalance;
            $balance->save();
            
            // NO TransactionLog created - silent edit
            
            return $balance;
        });
    }
}
