<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\translateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;


route::get('test', function (){

    $job = Job::first();
   translateJob::dispatch($job);

    return 'done';
});


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/jobs',             [JobController::class,              'index']);
Route::get('/jobs/create',      [JobController::class,              'create']);
Route::post('/jobs',            [JobController::class,              'store'])
    ->middleware('auth');

Route::get('/jobs/{job}',       [JobController::class,              'show']);
Route::get('/jobs/{job}/edit',  [JobController::class,              'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}',     [JobController::class,              'update'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::delete('/jobs/{job}',    [JobController::class,              'destroy'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::get('/register',         [RegisterUserController::class,     'create']);
Route::post('/register',        [RegisterUserController::class,     'store']);

Route::get('/login',            [SessionController::class,          'create'])
    ->name('login');
Route::post('/login',           [SessionController::class,          'store']);
Route::post('/logout',          [SessionController::class,          'destroy']);
