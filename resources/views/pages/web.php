<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\BuildingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('building', function () {
    return view('pages.pofolio');
});

// Route::get('/lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'my'])) {
//         Session::put('locale', $locale);
//         App::setLocale($locale);
//     }
//     return redirect()->back();
// })->name('lang.switch');

Route::get('/lang', function (Request $request) {
    $locale = $request->input('locale'); // en / mm
    if (in_array($locale, ['en', 'mm'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');

// header
Route::get('/building', [BuildingController::class, 'index'])->name('building.index');
Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');
Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/awards', function () {
    return view(view: 'pages.awards');
})->name('awards');

Route::get('/contact', function () {
    return view(view: 'pages.contact');
})->name('contact');
