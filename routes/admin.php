<?php

use App\Models\Amenity;
use App\Models\Mainbanner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\AmentityController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\MainbannerController;
use App\Http\Controllers\Admin\NewsletterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::name('asset.')->group(
    function () {
        Route::get('/asset/login', [LoginController::class, 'login'])->name('login');
        Route::post('/asset/do-login', [LoginController::class, 'doLogin'])->name('dologin');

        Route::middleware('auth:asset')->group(
            function () {
                Route::get('/asset/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
                Route::get('/asset/logout', [LoginController::class, 'logout']);
            }
        );
    }
);

Route::name('admin.')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('/admin/do-login', [LoginController::class, 'doLogin'])->name('dologin');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/admin/logout', [LoginController::class, 'logout']);

        Route::name('product.')->prefix('admin/products')->group(function () {
            Route::get('/', [ProductController::class, 'list'])->name('list');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/productSave', [ProductController::class, 'productSave'])->name('productSave');
            Route::post('/saveImages', [ProductController::class, 'saveImages'])->name('saveImages');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::post('/update', [ProductController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
        });

        Route::name('amentity.')->prefix('admin/amentity')->group(function () {
            Route::get('/', [AmentityController::class, 'list'])->name('list');
            Route::get('/create', [AmentityController::class, 'create'])->name('create');
            Route::post('/save', [AmentityController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [AmentityController::class, 'edit'])->name('edit');
            Route::post('/update', [AmentityController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AmentityController::class, 'delete'])->name('delete');
        });

        Route::name('menu.')->prefix('admin/menu')->group(function () {
            Route::get('/', [MenuController::class, 'list'])->name('list');
            Route::get('/create', [MenuController::class, 'create'])->name('create');
            Route::post('/save', [MenuController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('edit');
            Route::post('/update', [MenuController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('delete');
        });

        Route::name('type.')->prefix('admin/type')->group(function () {
            Route::get('/', [TypeController::class, 'list'])->name('list');
            Route::get('/create', [TypeController::class, 'create'])->name('create');
            Route::post('/save', [TypeController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [TypeController::class, 'edit'])->name('edit');
            Route::post('/update', [TypeController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [TypeController::class, 'delete'])->name('delete');
        });

        Route::name('mainbanner.')->prefix('admin/mainbanner')->group(function () {
            Route::get('/', [MainbannerController::class, 'list'])->name('list');
            Route::get('/create', [MainbannerController::class, 'create'])->name('create');
            Route::post('/save', [MainbannerController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [MainbannerController::class, 'edit'])->name('edit');
            Route::post('/update', [MainbannerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [MainbannerController::class, 'delete'])->name('delete');
        });

        Route::name('location.')->prefix('admin/location')->group(function () {
            Route::get('/', [LocationController::class, 'list'])->name('list');
            Route::get('/create', [LocationController::class, 'create'])->name('create');
            Route::post('/save', [LocationController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [LocationController::class, 'edit'])->name('edit');
            Route::post('/update', [LocationController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [LocationController::class, 'delete'])->name('delete');
        });


        Route::name('banner.')->prefix('admin/banner')->group(function () {
            Route::get('/', [BannerController::class, 'list'])->name('list');
            Route::get('/create', [BannerController::class, 'create'])->name('create');
            Route::post('/save', [BannerController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('edit');
            Route::post('/update', [BannerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BannerController::class, 'delete'])->name('delete');
        });

        Route::name('group.')->prefix('admin/group')->group(function () {
            Route::get('/', [GroupController::class, 'list'])->name('list');
            Route::get('/create', [GroupController::class, 'create'])->name('create');
            Route::post('/save', [GroupController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('edit');
            Route::post('/update', [GroupController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [GroupController::class, 'delete'])->name('delete');
        });

        Route::name('seller.')->prefix('admin/seller')->group(function () {
            Route::get('/', [SellerController::class, 'list'])->name('list');
            Route::get('/create', [SellerController::class, 'create'])->name('create');
            Route::post('/save', [SellerController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [SellerController::class, 'edit'])->name('edit');
            Route::post('/update', [SellerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SellerController::class, 'delete'])->name('delete');
        });

        Route::name('request.')->prefix('admin/request')->group(function () {
            Route::get('/', [RequestController::class, 'list'])->name('list');
            Route::get('/create', [RequestController::class, 'create'])->name('create');
            Route::post('/save', [RequestController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [RequestController::class, 'edit'])->name('edit');
            Route::post('/update', [RequestController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [RequestController::class, 'delete'])->name('delete');
        });

        Route::name('order.')->prefix('admin/order')->group(function () {
            Route::get('/', [BookingController::class, 'list'])->name('list');
            Route::get('/create', [BookingController::class, 'create'])->name('create');
            Route::post('/save', [BookingController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
            Route::post('/update', [BookingController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BookingController::class, 'delete'])->name('delete');
        });

        Route::name('customer.')->prefix('admin/customer')->group(function () {
            Route::get('/', [CustomerController::class, 'list'])->name('list');
            Route::get('/create', [CustomerController::class, 'create'])->name('create');
            Route::post('/save', [CustomerController::class, 'save'])->name('save');
            Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');
            Route::post('/update', [CustomerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');
        });

        Route::name('newsletter.')->prefix('admin/newsletter')->group(function () {
            Route::get('/', [NewsletterController::class, 'list'])->name('list');
        });
    });
});
// Route::get('/asset/login', function () {
//     return redirect()->route('admin.login');
// });

// Route::post(uri: 'upload', [\App\Http\Controllers\ProductController::class, 'store']);

// Route::get('/admin/hotels', [HotelController::class, 'list'])->name('list');


// Route::get('/admin/login', function () {
//     return view('welcome');
// });
