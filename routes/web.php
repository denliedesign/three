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
//Route::get('tuition', function () { return view('tuition'); });
Route::get('attire', function () { return view('attire'); });
//Route::get('policies', function () { return view('policies'); });
Route::get('calendar', function () { return view('calendar'); });
//Route::get('newsletter', function () { return view('newsletter'); });
Route::get('snow-queen', function () { return view('snow-queen'); });
Route::get('christmas-parade', function () { return view('christmas-parade'); });
Route::get('competition', function () { return view('competition'); });
Route::get('staff', function () { return view('staff'); });

Route::get('/news/january', function () { return view('/news/january'); });
Route::get('/news/february', function () { return view('/news/february'); });
Route::get('/news/march', function () { return view('/news/march'); });
Route::get('/news/april', function () { return view('/news/april'); });
Route::get('/news/may', function () { return view('/news/may'); });
Route::get('/news/june', function () { return view('/news/june'); });
Route::get('/news/july', function () { return view('/news/july'); });
Route::get('/news/august', function () { return view('/news/august'); });
Route::get('/news/september', function () { return view('/news/september'); });
Route::get('/news/october', function () { return view('/news/october'); });
Route::get('/news/november', function () { return view('/news/november'); });
Route::get('/news/december', function () { return view('/news/december'); });

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

require __DIR__.'/auth.php';
