<?php


use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Section;
use App\Livewire\Pages\article;
use App\Livewire\Pages\temoignages;
use App\Livewire\Pages\evenement;
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
Route::get('/temoignage', temoignages::class);
Route::get('/evenement', evenement::class);
Route::get('/article', article::class);







