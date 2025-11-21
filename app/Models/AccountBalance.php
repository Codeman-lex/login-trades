<?php

namespace App\Models;

use App\Models\User; // Added for the user relationship
use Illuminate\Database\Eloquent\Model;

class AccountBalance extends Model
{
    protected $fillable = [
        'user_id',
        'principal_amount',
        'current_balance',
        'last_growth_applied_at',
    ];

    protected $casts = [
        'last_growth_applied_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
