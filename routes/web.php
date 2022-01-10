<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutUsPage;
use App\Http\Livewire\Frontend\Product\IndexPage;
use App\Http\Livewire\Frontend\Product\ListPage;
use App\Http\Livewire\Frontend\Product\DetailsPage;
use App\Http\Livewire\Frontend\Product\ByCategoryPage;
use App\Http\Livewire\Frontend\Product\ListByCategoryPage;
use App\Http\Livewire\Frontend\FAQPage;
use App\Http\Livewire\Frontend\CartPage;
use App\Http\Livewire\Frontend\CheckoutPage;
use App\Http\Livewire\Frontend\ComparePage;
use App\Http\Livewire\Frontend\WishlistPage;
use App\Http\Livewire\Frontend\ContactUsPage;
use App\Http\Livewire\Frontend\NotFoundPage;

// For Admin__
use App\Http\Livewire\Admin\AdminDashboardPage;
use App\Http\Livewire\Admin\Category\IndexPage as CategoryIndexPage;
use App\Http\Livewire\Admin\Category\AddCategoryPage;
use App\Http\Livewire\Admin\Category\EditCategoryPage;
use App\Http\Livewire\Admin\Product\IndexPage as ProductIndexPage;
use App\Http\Livewire\Admin\Product\AddPage;
use App\Http\Livewire\Admin\Product\EditPage;
use App\Http\Livewire\Admin\Carousel\CarouselPage;
use App\Http\Livewire\Admin\Carousel\AddCarouselPage;
use App\Http\Livewire\Admin\Carousel\EditCarouselPage;
use App\Http\Livewire\Admin\HomeCategoryPage;
use App\Http\Livewire\Admin\SalePage;

// For Users__
use App\Http\Livewire\User\UserDashboardPage;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', HomePage::class)->name('home');

Route::get('/about-us', AboutUsPage::class)->name('about');

Route::prefix('products')->name('products.')->group(function ()
{
    Route::get('/', IndexPage::class)->name('index');
    Route::prefix('list')->name('list.')->group(function ()
    {
        Route::get('/', ListPage::class)->name('index');
        Route::get('/categories/{slug}', ListByCategoryPage::class)->name('by_category');
    });
    Route::get('/categories/{slug}', ByCategoryPage::class)->name('by_category');
    Route::get('/{slug}', DetailsPage::class)->name('details');
});

Route::get('/faqs', FAQPage::class)->name('faq');

Route::get('/cart', CartPage::class)->name('cart');

Route::get('/checkout', CheckoutPage::class)->name('checkout');

Route::get('/compare', ComparePage::class)->name('compare');

Route::get('/wishlist', WishlistPage::class)->name('wishlist');

Route::get('/contact-us', ContactUsPage::class)->name('contact');

Route::get('/404', NotFoundPage::class)->name('not_found');

// Admin Route__
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin')->name('admin.')->group(function ()
{
    Route::get('/dashboard', AdminDashboardPage::class)->name('dashboard');
    Route::prefix('products')->name('products.')->group(function ()
    {
        Route::get('/', ProductIndexPage::class)->name('index');
        Route::get('/add', AddPage::class)->name('add');
        Route::get('/edit/{id}', EditPage::class)->name('edit');
    });

    Route::prefix('categories')->name('categories.')->group(function ()
    {
        Route::get('/', CategoryIndexPage::class)->name('index');
        Route::get('/add', AddCategoryPage::class)->name('add');
        Route::get('/edit/{id}', EditCategoryPage::class)->name('edit');
    });

    Route::prefix('carousel')->name('carousel.')->group(function ()
    {
        Route::get('/', CarouselPage::class)->name('index');
        Route::get('/add', AddCarouselPage::class)->name('add');
        Route::get('/edit/{id}', EditCarouselPage::class)->name('edit');
    });

    Route::get('home-category', HomeCategoryPage::class)->name('new_arrival');

    Route::get('/sale', SalePage::class)->name('sale');
});

// Users / Customers Router__
Route::middleware(['auth:sanctum', 'verified'])->prefix('users')->name('users.')->group(function ()
{
    Route::get('/dashboard', UserDashboardPage::class)->name('dashboard');
});
