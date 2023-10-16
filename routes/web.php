<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CallbackController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RazorpayController;

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

Route::get("/", function () {
    // Offer Banner
    $banners = new Product;
    $banners_data =  $banners->getBanners();
    // Mobile banners
    $mobile_banners =  $banners->getMobileBanners();
    // Home Hotel List
    $hotel_data =  $banners->getHotelBasicdatas();
    $rec_hotel_data =  $banners->recommendedHotels();
    return view('index', [
        'banners' => $banners_data,
        'mobile_banners' => $mobile_banners,
        'hotels' => $hotel_data,
        'rec_hotel_data' => $rec_hotel_data,
    ]);
});


// Route::get('/detail/{id?}', function ($hotel_id = null) {
// 
//     $image_data = new Product();
//     $images =  $image_data->getHotelImages($hotel_id);
//     $hotel_data =  $image_data->getHotelDetails($hotel_id);
// 
//     $ratings =  $image_data->getRatings($hotel_id);
// 
// 
//     $rating_array =  $image_data->getTotalRatings($hotel_id);
//     $image =  $image_data->getHotelSingleImage($hotel_id);
//     // dd($image);
// 
// 
//     return view('info', [
//         'images' => $images,
//         'image' => $image,
//         'hotel_data' => $hotel_data,
//         'ratings' => $ratings,
//         'rating_array' => $rating_array,
//     ]);
// });





// Route::get('/checkout', function () {
//     $data =  array();
//     return view('checkout', [
//         'data' => $data,
//     ]);
// });

// Route::get('/order', function () {
//     $data =  array();
//     return view('order', [
//         'data' => $data,
//     ]);
// });

Route::get('/order', [OrderController::class, 'index']);


Route::get('/success', function () {
    $data =  array();
    return view('callbackSuccess', [
        'data' => $data,
    ]);
});

// Route::get('/join', function () {
//     $data =  array();
//     return view('request', [
//         'data' => $data,
//     ]);
// });

Route::get('/join', [CallbackController::class, 'index'])->name('index');

Route::get('/mail', [CallbackController::class, 'mail'])->name('mail');
Route::get('/mailnotify', [CallbackController::class, 'mailnotify'])->name('mailnotify');

Route::get('/list/{name?}', [ListController::class, 'list'])->name('list');

Route::get('/info/{id}/{name?}', [ListController::class, 'info'])->name('info');

// Route::get('/info/{id?}{name?}', function ($hotel_id = null) {
//     $image_data = new Product();
//     $images =  $image_data->getHotelImages($hotel_id);
//     $hotel_data =  $image_data->getHotelDetails($hotel_id);
//     $ratings =  $image_data->getRatings($hotel_id);
// 
//     $rating_array =  $image_data->getTotalRatings($hotel_id);
//     $image =  $image_data->getHotelSingleImage($hotel_id);
// 
//     return view('detail', [
//         'images' => $images,
//         'image' => $image,
//         'hotel_data' => $hotel_data,
//         'ratings' => $ratings,
//         'rating_array' => $rating_array,
//     ]);
// });

Route::post('/callback', [CallbackController::class, 'callback'])->name('callback');

Route::post('/newsletter', [CallbackController::class, 'newsletter'])->name('newsletter');

// Route::get('/list', function () {
// 
//     $hotels = new Product();
//     $hotel_data =  $hotels->getHotelBasicdatas();
//     $amentities =  $hotels->getAmentities();
//     $menus =  $hotels->getMenus();
// 
// 
//     // dd($amentities);
//     return view('propertyList', [
//         'hotels' => $hotel_data,
//         'amentities' => $amentities,
//         'menus' => $menus
//     ]);
// });

Route::get('/about-us', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/privacy', function () {

    return view('privacy');
});

Route::get('/terms', function () {

    return view('terms');
});

Route::get('/refund', function () {

    return view('refund');
});

Route::get('/guest', function () {

    return view('guest');
});

// Route::get('razorpay', [RazorpayController::class, 'razorpay'])->name('razorpay');
// Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');

// Route::get('checkout', [CheckoutControllerController::class, 'index']);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/invoice', [CheckoutController::class, 'invoice']);


Route::get('razorpay-payment', [RazorpayController::class, 'store'])->name('razorpay.payment.store');

Route::post('/review', [ProfileController::class, 'review'])->name('review');


// Route::get('/checkout', function () {
//     $data =  array();
//     return view('checkout', [
//         'data' => $data,
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
