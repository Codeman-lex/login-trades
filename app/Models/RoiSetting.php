<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoiSetting extends Model
{
    protected $fillable = [
        'user_id',
        'scope',
        'daily_rate_percent',
        'active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
