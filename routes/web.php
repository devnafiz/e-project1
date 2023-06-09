<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;

use App\Http\Controllers\AuthController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/login',[AuthController::class,'loginView'])->name('user.login.view');
Route::post('/login',[AuthController::class,'login'])->name('user.login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');



Route::group(['middleware' => ['auth','web']], function() {

  Route::get('/profile',[AuthController::class,'profile'])->name('user.profile');	
 
  Route::resource('list',ListController::class,[
        'only' => ['index', 'create','show', 'store','edit', 'update'],
]); 
  Route::get('list/delete/{id}',[ListController::class,'delete'])->name('list.delete');
});



