<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function confirm(Request $request)
    {
        return redirect()->route('dashboard')->with('success', 'Deposit confirmation received. Your deposit will be credited once the blockchain confirms your transaction (typically 1-3 confirmations).');
    }
}
