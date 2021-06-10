<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
Route::get('/', [PostsController::class, 'index'])->name('index');
Route::get('/news', [PostsController::class, 'news'])->name('news');
Route::get('/news/{post:slug}', [PostsController::class, 'show'])->name('news.show');
Route::get('/projekti-u-provedbi', [PostsController::class, 'projektiUprovedbi'])->name('projektiUprovedbi');
Route::get('/projekti-u-provedbi/{post:slug}', [PostsController::class, 'show'])->name('projektiUprovedbi.show');
Route::get('/provedeni-projekti', [PostsController::class, 'provedeniProjekti'])->name('provedeniProjekti');
Route::get('/provedeni-projekti/{post:slug}', [PostsController::class, 'show'])->name('provedeniProjekti.show');
Route::get('/natjecaji', [PostsController::class, 'natjecaji'])->name('natjecaji');
Route::get('/natjecaji/{post:slug}', [PostsController::class, 'show'])->name('natjecaji.show');
Route::get('/contact', [PostsController::class, 'contact'])->name('frontend.contact');
Route::get('/usluge', [PostsController::class, 'services'])->name('frontend.services');



Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
