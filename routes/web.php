<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() { return view('login'); })->name('login');
Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');

// Folders are used here (e.g., 'members.index' looks for members/index.blade.php)
Route::get('/members', function() { return view('members.index'); })->name('members');
Route::get('/payments', function() { return view('billing.index'); })->name('payments');
Route::get('/reports', function() { return view('reports'); })->name('reports');
Route::get('/settings', function() { 
    return view('settings'); // Points directly to settings.blade.php
})->name('settings');