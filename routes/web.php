<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
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
Route::get('/blog/upload', function(){
    return view('upload');
})->middleware('auth');

Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->middleware('auth');

Route::get('/blog/update/{id}',[BlogController::class, 'update'])->middleware('auth');

Route::post('/blog/save/{id}',[BlogController::class, 'save'])->middleware('auth');

Route::post('/blog/new/create',[BlogController::class,'index'])->middleware('auth');

Route::get('/displayblog/{id}',[BlogController::class, 'single']);

Route::get('/', [BlogController::class, 'home']);

Route::get('/services', function () {
    return view('service');
});

Route::get('/careers', function(){
    return view('careers');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test/apply', function(){
    return view('apply');
});

Route::get('/privacy-policy', function(){
    return view('privacy-policy');
});

Route::get('/apply/complete', function(){
    return view('thankyou');
});

Route::post('/careers/apply',[MailController::class, 'submit']);

Route::get('/offers/super-startup-offer' , function(){
    return view('startup-offer');
});

Route::get('/blogs', [BlogController::class, 'all']);

Route::get('/blog/{id}', [BlogController::class, 'single']);


Route::get('/services/webDevelopment', function(){
    return view('services.webdevelopment');
});

Route::get('/services/softwaresolutions', function(){
    return view('services.mobileappdevelopment');
});

Route::get('/services/digitalMarketing', function(){
    return view('services.digitalmarketing');
});

Route::get('/services/SEO', function(){
    return view('services.seo');
});



Route::get('/services/socialMediaManagement', function(){
    return view('services.socialmedia');
});

Route::get('/services/multimedia', function(){
    return view('services.branding');
});

Route::get('/coupons/new',[OfferController::class, 'new']);

Route::post('/coupons/create',[OfferController::class, 'create']);

Route::get('/coupon/delete/{id}', [OfferController::class, 'destroy']);

Route::post('/offer/booking', [OfferController::class, 'book']);

Route::get('/booking/completed', function(){
    return view('booking-completed');
});







// Route::get('/test', function(){
//     return view('test');
// });


require __DIR__.'/auth.php';
