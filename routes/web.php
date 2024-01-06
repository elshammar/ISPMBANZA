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
});
Route::get('/contact', Contact::class);
Route::get('/about', About::class);
Route::get('/section', Section::class);
Route::get('/article', Article::class);
Route::get('/temoignage',Temoignages::class);
Route::get('/evenement', Evenement::class);





