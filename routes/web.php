<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


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
