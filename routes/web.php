<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Article;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Section;
use App\Livewire\Pages\Temoignages;
use App\Livewire\Pages\Evenement;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about', About::class)->name('about');
Route::get('/article', Article::class)->name('article');
Route::get('/temoignage',Temoignages::class)->name('temoignage');
Route::get('/evenement', Evenement::class)->name('evenement');
Route::get('/section',Section::class)->name('section');





