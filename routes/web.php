<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/book/{id?}', ['before' => ['auth'], function($id = '000'){
    //Route::get('/book/{id?}', function($id = '000'){
        $bookpage = file_get_contents(app_path() . '/bookpages/bp_' . $id . '.htm');
        $previous = null;
        $next = null;
        if (file_exists(app_path() . '/bookpages/bp_' . str_pad($id - 1, 3, '0', STR_PAD_LEFT) . '.htm')) {
            $previous = str_pad($id - 1, 3, '0', STR_PAD_LEFT);
        }
        if (file_exists(app_path() . '/bookpages/bp_' . str_pad($id + 1, 3, '0', STR_PAD_LEFT) . '.htm')) {
            $next = str_pad($id + 1, 3, '0', STR_PAD_LEFT);
        }
        return View::make('book.bookpage')
            ->with('bookpage', $bookpage)
            ->with('previous', $previous)
            ->with('next', $next);
    }]);
// Route::get('/book', function () {
//     return view('book.bookpage');
    
// });
Route::get('/company', function () {
    return view('company');
    
});

Route::get('/optistrech', function () {
    return view('optistrech');
    
});
Route::get('/biographies', function () {
    return view('biographies');
    
});
Route::get('/inthemedia', function () {
    return view('inthemedia');
    
});
Route::get('/faq', function () {
    return view('faq');
    
});
Route::get('/classes', function () {
    return view('classes');
    
});
Route::get('/testimonials', function () {
    return view('testimonials');
    
});
Route::get('/knowledge', function () {
    return view('knowledge');
    
});
Route::get('/contact', function () {
    return view('contact');
    
});
Route::get('/purchase', function () {
    return view('purchase');   
})->name('purchase');

Route::post('/purchase', 'App\Http\Controllers\BookController@doPurchase');



