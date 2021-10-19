<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\MyAccount;
use \App\Http\Controllers\RecordController;
use \App\Http\Controllers\CertificateController;
use \App\Http\Controllers\PDFGenerator;
use \App\Http\Controllers\ResidentController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('my_account', [MyAccount::class, 'index']);
Route::get('certificates', [CertificateController::class, 'index']);
Route::get('generate/barangay_certificate', [PDFGenerator::class, 'barangayCertificate']);

Route::post('resident', [ResidentController::class, 'store']);
Route::get('resident', [ResidentController::class, 'index']);
