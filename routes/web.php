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

Route::post('/blog/new/create',[BlogController::class,'index']);

Route::get('/displayblog/{id}',[BlogController::class, 'single']);

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/blogs', function () {
    return view('blog-index');
});

Route::get('/blog/{id}', function () {
    return view('blog');
});

Route::get('/services/webDevelopment', function(){
    return view('services.webdevelopment');
});

Route::get('/services/mobileApp', function(){
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

Route::get('/services/branding', function(){
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




Route::get('/test', function(){
    return view('test');
});


require __DIR__.'/auth.php';
