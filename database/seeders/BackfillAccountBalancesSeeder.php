<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AccountBalance;

class BackfillAccountBalancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Creates AccountBalance records for users who don't have one yet.
     */
    public function run(): void
    {
        $this->command->info('Starting AccountBalance backfill...');

        // Get all users without an AccountBalance
        $usersWithoutBalance = User::whereDoesntHave('accountBalance')->get();

        $this->command->info("Found {$usersWithoutBalance->count()} users without AccountBalance records.");

        $created = 0;

        foreach ($usersWithoutBalance as $user) {
            // Skip admin users
            if ($user->role === 'admin') {
                $this->command->warn("Skipping admin user: {$user->email}");
                continue;
            }

            AccountBalance::create([
                'user_id' => $user->id,
                'principal_amount' => 0.00,
                'current_balance' => 0.00,
            ]);

            $created++;
            $this->command->info("Created AccountBalance for user: {$user->email}");
        }

        $this->command->info("Backfill complete! Created {$created} AccountBalance records.");
    }
}
