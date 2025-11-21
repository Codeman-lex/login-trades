<?php

namespace App\Services;

use App\Models\User;
use App\Models\RoiSetting;
use App\Models\AuditLog;
use Illuminate\Support\Facades\DB;

class RoiService
{
    protected BalanceService $balanceService;

    public function __construct(BalanceService $balanceService)
    {
        $this->balanceService = $balanceService;
    }

    public function getEffectiveDailyRate(User $user): float
    {
        // Check for user-specific override
        $userSetting = RoiSetting::where('user_id', $user->id)
            ->where('active', true)
            ->first();

        if ($userSetting) {
            return $userSetting->daily_rate_percent;
        }

        // Fallback to global setting
        $globalSetting = RoiSetting::where('scope', 'global')
            ->where('active', true)
            ->first();

        return $globalSetting ? $globalSetting->daily_rate_percent : 0.0;
    }

    public function applyDailyGrowth(User $user): void
    {
        $rate = $this->getEffectiveDailyRate($user);

        if ($rate <= 0) {
            return;
        }

        $balance = $this->balanceService->getUserBalance($user);
        
        if ($balance->current_balance <= 0) {
            return;
        }

        // Calculate growth amount
        $growthAmount = $balance->current_balance * ($rate / 100);

        // Apply credit
        $this->balanceService->credit($user, $growthAmount, 'roi_growth', [
            'rate_percent' => $rate,
            'base_balance' => $balance->current_balance,
        ]);

        // Update last applied timestamp
        $balance->last_growth_applied_at = now();
        $balance->save();

        // Log audit
        AuditLog::create([
            'action' => 'apply_daily_roi',
            'target_type' => 'user',
            'target_id' => $user->id,
            'details' => [
                'amount' => $growthAmount,
                'rate' => $rate,
                'new_balance' => $balance->current_balance,
            ],
        ]);
    }
}
