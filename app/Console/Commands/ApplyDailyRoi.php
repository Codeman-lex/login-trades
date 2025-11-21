<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ApplyDailyRoi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roi:apply';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Apply daily ROI to all eligible users';

    /**
     * Execute the console command.
     */
    public function handle(\App\Services\RoiService $roiService)
    {
        $this->info('Starting daily ROI application...');
        
        \App\Models\User::chunk(100, function ($users) use ($roiService) {
            foreach ($users as $user) {
                try {
                    $roiService->applyDailyGrowth($user);
                    $this->info("Applied ROI for user: {$user->id}");
                } catch (\Exception $e) {
                    $this->error("Failed for user {$user->id}: " . $e->getMessage());
                }
            }
        });

        $this->info('Daily ROI application complete.');
    }
}
