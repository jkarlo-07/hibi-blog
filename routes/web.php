<?php

use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $featured_posts = Post::with('user')
        ->where('is_featured', true)
        ->get();
    
    $recent_posts = Post::with('user')
        ->orderBy('created_at', 'desc')
        ->limit(10)
        ->get();

    return view('home', compact('featured_posts', 'recent_posts'));
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
