<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    $users = User::latest()->paginate(5);
    return view('welcome', [
        'posts' => $posts,
        'users' => $users,
    ]);
});

// Register
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

// Log In
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// Posts
Route::get('/create', [PostController::class, 'create']);
Route::post('/create', [PostController::class, 'store']);

// Profile
Route::get('/profile/{user}', function(User $user){
    $users = User::latest()->paginate(5);
    $posts = $user->posts()->get();

    return view('profile.show', [
        'user' => $user,
        'posts' => $posts,
        'users' => $users,

    ]);
});
