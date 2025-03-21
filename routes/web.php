<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HubController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('staff', function () { return view('staff'); });
Route::get('preschool-dance-classes-plano', function () { return view('preschool-dance-classes-plano'); });
Route::get('classes', function () { return view('classes'); });
Route::get('attire', function () { return view('attire'); });
Route::get('calendar', function () { return view('calendar'); });
Route::get('snow-queen', function () { return view('snow-queen'); });
Route::get('christmas-parade', function () { return view('christmas-parade'); });
Route::get('competition', function () { return view('competition'); });
Route::get('staff', function () { return view('staff'); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::resource('hubs', HubController::class);
Route::resource('articles', ArticleController::class);

Route::get('recital', function () {
    $hubs = (new App\Http\Controllers\HubController)->getHubs(); // assuming getHubs() is a static method in your HubController
    return view('hubs.index', ['hubs' => $hubs]);
});

Route::get('newsletter', function () {
    $articles = (new App\Http\Controllers\ArticleController)->getArticles(); // assuming getHubs() is a static method in your HubController
    return view('articles.index', ['articles' => $articles]);
});

/* SEO */

Route::get('/dance-classes-in-plano-tx', function () {
    return view('/dance-classes-in-plano-tx');
});

Route::get('/dance-studios-in-plano-tx', function () {
    return view('/dance-studios-in-plano-tx');
});

Route::get('/dance-lessons-plano', function () {
    return view('/dance-lessons-plano');
});

Route::get('/ballet-plano', function () {
    return view('/ballet-plano');
});

Route::get('/dance-allen', function () {
    return view('/dance-allen');
});

Route::get('/dance-studios-allen', function () {
    return view('/dance-studios-allen');
});

Route::get('/dance-plano', function () {
    return view('/dance-plano');
});
Route::get('/dance-richardson', function () {
    return view('/dance-richardson');
});
Route::get('/dance-frisco', function () {
    return view('/dance-frisco');
});
Route::get('/allen-dance', function () {
    return view('/allen-dance');
});

Route::get('/toddler-dance-classes-plano', function () {
    return view('/toddler-dance-classes-plano');
});

Route::get('/dance-classes-richardson', function () {
    return view('/dance-classes-richardson');
});

Route::get('/tumble-classes-plano', function () {
    return view('/tumble-classes-plano');
});

/* END SEO */

require __DIR__.'/auth.php';
