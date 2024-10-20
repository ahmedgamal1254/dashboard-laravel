<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/change-language/{lang}', function ($lang) {
    // Validate the language input
    $languages=all_languages()->pluck("icon")->toArray();

    $language=$lang;
    if($lang == "ar"){
        $language="eg";
    }

    if (in_array($language, $languages)) {
        // Save the language in the session
        session(['locale' => $lang]);

        $previous=str_replace(url('/'), '', url()->previous());

        $previous_url=explode('/',$previous);

        // Redirect back to the previous URL but change the language in the URL
        $previousUrl = url()->previous(); // Get the previous URL
        $newUrl = env("APP_URL") . preg_replace("/$previous_url[1]/", "$language", $previous); // Replace language segment in the URL

        App::setLocale($lang);

        return redirect($newUrl);
    }

    // If language is not valid, redirect back to the previous page
    return redirect()->back();
})->name('change-language');
