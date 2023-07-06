<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MarketerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Marketer;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/coupons/new',[OfferController::class, 'new'])->middleware('auth');

Route::post('/coupons/create',[OfferController::class, 'create'])->middleware('auth');

Route::get('/coupon/delete/{id}', [OfferController::class, 'destroy'])->middleware('auth');

Route::post('/offer/booking', [OfferController::class, 'book']);

Route::get('/booking/completed', function(){
    return view('booking-completed');
});

Route::get('/offers/bookings',[OfferController::class, 'bookings'])->middleware('auth');

Route::get('/booking/delete/{id}', [OfferController::class, 'deleteBooking'])->middleware('auth');

Route::get('/logout',[AdministrationController::class, 'logout']);
// admin route group

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/index', [AdministrationController::class, 'index']);

    Route::get('/approve-marketers', [AdministrationController::class, 'approveIndex']);

    Route::get('/marketer/approve', [AdministrationController::class, 'approve']);
});



Route::get('/marketer/register', function(){
    return view('marketer.register');
});

Route::post('/marketer/registration/submit',[UserController::class, 'register']);

Route::get('/marketer/registration/complete',function(){
    return view('marketer.registration-complete');
});

Route::prefix('marketer')->middleware('marketer')->group( function(){

    Route::get('/home', [MarketerController::class, 'home']);

    Route::get('/manage-coupons', [MarketerController::class, 'manageCoupons']);

    Route::get('/refferals',[MarketerController::class,'refferals']);

    Route::post('/coupon/create',[MarketerController::class, 'createCoupon']);

    Route::get('/change-password',[MarketerController::class, 'changePassword']);

    Route::post('/password/store',[MarketerController::class, 'storePassword']);

    Route::get('/logout',[MarketerController::class, 'destroy']);
});

Route::get('/marketer/login', function(){
    return view('marketer.login');
})->name('marketer-login');

Route::post('/marketer/authenticate', [MarketerController::class, 'authenticate']);


// Route::get('/test', function(){
//     return view('test');
// });


require __DIR__.'/auth.php';
