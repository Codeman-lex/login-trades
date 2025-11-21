<?php

namespace App\Http\Controllers;

use App\Models\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $currentBalance = $user->accountBalance->current_balance ?? 0;

        // Validate the request
        $validated = $request->validate([
            'amount' => [
                'required',
                'numeric',
                'min:0.01',
                'max:' . $currentBalance
            ],
            'btc_address' => 'required|string|max:255',
        ], [
            'amount.max' => 'You do not have enough to withdraw. Please deposit to trade or withdraw your main balance.',
        ]);

        // Create withdrawal request
        WithdrawalRequest::create([
            'user_id' => $user->id,
            'amount' => $validated['amount'],
            'btc_address' => $validated['btc_address'],
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Withdrawal request submitted successfully. It will be processed within 24 hours.');
    }
}
