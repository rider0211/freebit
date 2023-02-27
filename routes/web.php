<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/main', [HomeController::class, "main"])->name("main");
Route::post('/register_wallet_Address', [HomeController::class, "regist_wallet"])->name("regist_wallet");
Route::post('/findDomainName', [HomeController::class, "findDomainName"])->name("findDomainName");
Route::post('/validate_twitter_displayName', [HomeController::class, "validateTwitterName"])->name("validateTwitterName");
Route::post('/finalization', [HomeController::class, "finalization"])->name("finalization");
Route::get('/cron', [HomeController::class, "cron_job"]);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/statistics', [HomeController::class, "statistics"])->name("statistics");
    Route::get('/batch_reg', [HomeController::class, "batch_register"]);
    Route::post('/csv_register', [HomeController::class, "csv_register"])->name("csv_register");
});

require __DIR__.'/auth.php';
