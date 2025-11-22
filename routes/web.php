<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/case-studies', function () {
    return view('case-studies');
})->name('case-studies');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/architecture', function () {
    return view('pages.architecture');
})->name('architecture');

Route::get('/performance', function () {
    return view('pages.performance');
})->name('performance');

Route::get('/markets', function () {
    return view('pages.markets');
})->name('markets');

Route::get('/security', function () {
    return view('pages.security');
})->name('security');

Route::get('/api', function () {
    return view('pages.api');
})->name('api');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/legal', function () {
    return view('pages.legal');
})->name('legal');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/deposit/confirm', [App\Http\Controllers\DepositController::class, 'confirm'])->name('deposit.confirm');
    Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('withdrawal.store');
});



Route::get('/init-admin', function () {
    $admin = \App\Models\User::firstOrCreate(
        ['email' => 'admin@realaitrading.com'],
        [
            'name' => 'Administrator',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]
    );
    
    if ($admin->role !== 'admin') {
        $admin->role = 'admin';
        $admin->save();
    }
    
    return 'Admin account ready. Login with: admin@realaitrading.com / password';
});

Route::get('/run-migrations', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return 'Migrations ran successfully: <br><pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
});

Route::get('/fix-database', function () {
    $output = '<h2>Database Diagnosis</h2>';
    
    // Check what tables exist
    $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
    $output .= '<h3>Existing Tables:</h3><pre>' . print_r($tables, true) . '</pre>';
    
    // Fresh migrate (will drop all tables and recreate)
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
    $output .= '<h3>Fresh Migration Output:</h3><pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
    
    return $output;
});

Route::get('/test-database', function () {
    $output = '<h2>Database Testing</h2>';
    
    try {
        // Test each table
        $tables = ['users', 'deposits', 'account_balances', 'roi_settings', 'transaction_logs', 'audit_logs', 'withdrawal_requests', 'sessions', 'cache', 'jobs'];
        
        foreach ($tables as $table) {
            try {
                $count = \Illuminate\Support\Facades\DB::table($table)->count();
                $output .= "<p>✅ Table '$table': $count records</p>";
            } catch (\Exception $e) {
                $output .= "<p>❌ Table '$table': " . $e->getMessage() . "</p>";
            }
        }
        
    } catch (\Exception $e) {
        $output .= '<p style="color:red;">Error: ' . $e->getMessage() . '</p>';
        $output .= '<pre>' . $e->getTraceAsString() . '</pre>';
    }
    
    return $output;
});

Route::get('/test-filament', function () {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    try {
        echo '<h2>Filament List Page Testing</h2>';
        
        // Try to instantiate the ListDeposits page (this is what Filament does)
        echo '<p>Creating ListDeposits page instance...</p>';
        $page = new \App\Filament\Resources\DepositResource\Pages\ListDeposits();
        echo '<p>✅ Page instantiated successfully</p>';
        
        // Try to get the resource
        echo '<p>Getting resource class...</p>';
        $resource = $page::getResource();
        echo '<p>✅ Resource: ' . $resource . '</p>';
        
        // Try to query the model directly
        echo '<p>Querying deposits...</p>';
        $deposits = \App\Models\Deposit::all();
        echo '<p>✅ Found ' . $deposits->count() . ' deposits</p>';
        
        echo '<h3 style="color:green;">All tests passed!</h3>';
        echo '<p>The admin panel should work. Try accessing it again.</p>';
        
    } catch (\Throwable $e) {
        echo '<h2 style="color:red;">ERROR:</h2>';
        echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
        echo '<p><strong>File:</strong> ' . $e->getFile() . ':' . $e->getLine() . '</p>';
        echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    }
});


require __DIR__.'/auth.php';
