<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ChaletsController;
use App\Http\Controllers\GuestsController;
use App\Http\Controllers\ResortsController;
use App\Http\Controllers\ServicesController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

// Routes that do not require authentication

// Routes requiring authentication
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/user_create', [App\Http\Controllers\UserController::class, 'create'])->name('user_create');
    Route::post('/user_store', [App\Http\Controllers\UserController::class, 'store'])->name('user_store');
    Route::get('/user_edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user_edit');
    Route::post('/user_update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user_update');
    Route::get('/user_destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user_destroy');

    Route::get('/mm', [App\Http\Controllers\MunicipalitiesController::class, 'index'])->name('municipalities');
    Route::get('/municipalities_create', [App\Http\Controllers\MunicipalitiesController::class, 'create'])->name('municipalities_create');
    Route::post('/municipalities_store', [App\Http\Controllers\MunicipalitiesController::class, 'store'])->name('municipalities_store');
    Route::get('/municipalities_edit/{id}', [App\Http\Controllers\MunicipalitiesController::class, 'edit'])->name('municipalities_edit');
    Route::post('/municipalities_update/{id}', [App\Http\Controllers\MunicipalitiesController::class, 'update'])->name('municipalities_update');
    Route::get('/municipalities_destroy/{id}', [App\Http\Controllers\MunicipalitiesController::class, 'destroy'])->name('municipalities_destroy');

    Route::get('/resort', [App\Http\Controllers\ResortsController::class, 'index'])->name('resort');
    Route::post('/resorts_store', [App\Http\Controllers\ResortsController::class, 'store'])->name('resorts_store');
    Route::get('/resorts_edit/{id}', [App\Http\Controllers\ResortsController::class, 'edit'])->name('resorts_edit');
    Route::post('/resorts_update/{id}', [App\Http\Controllers\ResortsController::class, 'update'])->name('resorts_update');
    Route::delete('/resorts_destroy/{id}', [App\Http\Controllers\ResortsController::class, 'destroy'])->name('resorts_destroy');

    Route::get('/service', [App\Http\Controllers\ServicesController::class, 'index'])->name('service');
    Route::post('/service_store', [App\Http\Controllers\ServicesController::class, 'store'])->name('service_store');
    Route::get('/service_edit/{id}', [App\Http\Controllers\ServicesController::class, 'edit'])->name('service_edit');
    Route::post('/service_update/{id}', [App\Http\Controllers\ServicesController::class, 'update'])->name('service_update');
    Route::delete('/service_destroy/{id}', [App\Http\Controllers\ServicesController::class, 'destroy'])->name('service_destroy');

    Route::get('/category', [App\Http\Controllers\CategoriesController::class, 'index'])->name('category');
    Route::post('/category_store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category_store');
    Route::get('/category_edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('category_edit');
    Route::post('/category_update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('category_update');
    Route::delete('/category_destroy/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('category_destroy');

    Route::get('/chalets', [App\Http\Controllers\ChaletsController::class, 'index'])->name('chalets');
    Route::post('/chalets_store', [App\Http\Controllers\ChaletsController::class, 'store'])->name('chalets_store');
    Route::get('/chalets_edit/{id}', [App\Http\Controllers\ChaletsController::class, 'edit'])->name('chalets_edit');
    Route::post('/chalets_update/{id}', [App\Http\Controllers\ChaletsController::class, 'update'])->name('chalets_update');
    Route::delete('/chalets_destroy/{id}', [App\Http\Controllers\ChaletsController::class, 'destroy'])->name('chalets_destroy');

    Route::get('/reservation/{chalet_id}', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservation_booking');
    Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation_store');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\HomeController::class, 'show'])->name('main');
Route::get('/explore', [App\Http\Controllers\HomeController::class, 'explore'])->name('explore');
Route::get('/resortswithChaleh/{id}', [App\Http\Controllers\HomeController::class, 'resort'])->name('resortswithChaleh');
Route::get('/chaletshow/{id}', [App\Http\Controllers\HomeController::class, 'showChalet'])->name('chaletshow');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('guest-login', [App\Http\Controllers\Auth\LoginController::class, 'showGuestLoginForm'])->name('guest.login.form');
Route::post('guest-login', [App\Http\Controllers\Auth\LoginController::class, 'guestLogin'])->name('guest.login');

?>

