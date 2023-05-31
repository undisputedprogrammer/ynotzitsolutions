<?php

use App\Http\Controllers\BlogController;
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

Route::post('/blog/new/create',[BlogController::class,'index']);

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

Route::get('/services/onlineAdvertisements', function(){
    return view('services.onlinead');
});

Route::get('/services/socialMediaManagement', function(){
    return view('services.socialmedia');
});

Route::get('/services/multimedia', function(){
    return view('services.branding');
});

Route::get('/services/logoDesign', function(){
    return view('services.logo-design');
});

Route::get('/services/buisinesCardDesign', function(){
    return view('services.buisinesscard');
});

Route::get('/services/stationaries', function(){
    return view('services.stationaries');
});

Route::get('/services/catalogues', function(){
    return view('services.catalogues');
});

Route::get('/services/leaflets&brochures', function(){
    return view('services.landb');
});

Route::get('/services/promoVideos', function(){
    return view('services.promovideos');
});

Route::get('/services/customRequirements', function(){
    return view('services.customreq');
});




// Route::get('/test', function(){
//     return view('test');
// });


require __DIR__.'/auth.php';
