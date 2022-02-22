<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminPostController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('adminnews.index');

Route::get('/about-us', function () {
    return view('pages.about.aboutus');
});

Route::get('/our-programs', function () {
    return view('pages.about.ourprograms');
});

Route::get('/about-the-founder', function () {
    return view('pages.about.aboutthefounder');
});

Route::get('/our-team', function () {
    return view('pages.about.ourteam');
});

Route::get('/our-networks', function () {
    return view('pages.about.ournetworks');
});

Route::get('/int-afl', function () {
    return view('pages.about.intr-aff.interaff');
});

Route::get('/ph', function () {
    return view('pages.about.intr-aff.ph');
});

Route::get('/malay', function () {
    return view('pages.about.intr-aff.malay');
});

Route::get('/india', function () {
    return view('pages.about.intr-aff.india');
});

Route::get('/contact-us', function () {
    return view('pages.involved.contactus');
});

Route::get('/join-us', function () {
    return view('pages.involved.joinus');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::get('/coevents', function () {
    return view('pages.event.coevents');
});

Route::get('/rewin', function () {
    return view('pages.event.rewin');
});

Route::get('/wgg', function () {
    return view('pages.event.wggevents.wgg');
});

Route::get('/wg', function () {
    return view('pages.event.wggevents.wg');
});

Route::get('/1stint', function () {
    return view('pages.event.wggevents.1stint');
});

Route::get('/1st', function () {
    return view('pages.event.wggevents.1st');
});

Route::get('/2nd', function () {
    return view('pages.event.wggevents.2nd');
});

Route::get('/3rd', function () {
    return view('pages.event.wggevents.3rd');
});

Route::get('/blog', function () {
    return view('pages.media.blog');
});

// Route::get('/news', function () {
//     return view('pages.media.news.news');
// });

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');


Route::get('/publication', function () {
    return view('pages.media.publication');
});

Route::get('/chronicles', function () {
    return view('pages.media.chronicles');
});

Route::get('/warta', function () {
    return view('pages.media.warta');
});

Route::get('/gallery', function () {
    return view('pages.media.gallery');
});

Route::get('/admin/post', [AdminPostController::class, 'index'])->name('adminnews.index');
Route::post('/admin/post', [AdminPostController::class, 'store'])->name('adminnews.post');
