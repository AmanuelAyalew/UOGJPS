
<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\BlockUserController;
use App\Http\Controllers\DepartementNameController;
use App\Http\Controllers\DetailView;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\newcontroller;
use App\Http\Controllers\Profile1Controller;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\Profile3Controller;
use App\Http\Controllers\Profile4Controller;
use App\Http\Controllers\VacancyList;
use App\Http\Controllers\VacancyRegisterController;
use Illuminate\Support\Facades\Auth;

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
    return view('wellcome');
});

Route::get('/availablejobs', [newcontroller::class, 'list'])->name('list');
Route::get('availablejobs/show/{id}', [newcontroller::class, 'show'])->name('show');



Auth::routes(['verify' => true]);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('vacancy_list', VacancyList::class);
    Route::resource('profile1', Profile1Controller::class);
    Route::resource('profile2', Profile2Controller::class);
    Route::resource('profile3', Profile3Controller::class);
    Route::resource('profile4', Profile4Controller::class);
    Route::resource('Apply', ApplyController::class);
    Route::get('detail_view/{id}', [DetailView::class, 'index'])->name('index');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {


    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('/departement', DepartementNameController::class);
    Route::resource('/vacancy_register', VacancyRegisterController::class);
    Route::resource('/block', BlockUserController::class);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
