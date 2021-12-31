<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutUsPage;
use App\Http\Livewire\Frontend\Product\IndexPage;
use App\Http\Livewire\Frontend\Product\DetailsPage;
use App\Http\Livewire\Frontend\FAQPage;

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
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', HomePage::class)->name('home');

Route::get('/about-us', AboutUsPage::class)->name('about');

Route::prefix('products')->name('products.')->group(function ()
{
    Route::get('/', IndexPage::class)->name('index');
    Route::get('/details', DetailsPage::class)->name('details');
});

Route::get('/faqs', FAQPage::class)->name('faq');
