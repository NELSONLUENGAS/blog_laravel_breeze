<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');

Route::post('/contact', function () {
    return to_route('welcome')
        ->with('status', 'Message send!');
})->name('contact.submit');

Route::resource(
    'blog',
    PostController::class,
    [
        "names" => "posts",
        "parameters" => [
            "blog" => "post"
        ]
    ]
);

Route::view('nosotros', 'nosotros')->name('nosotros');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
