<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvoiceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/invoices', function () {

    return view('invoices');
})->middleware(['auth', 'verified'])->name('invoices');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('fetch-invoices', [InvoiceController::class, 'fetchInvoices']);
// Route::get('/user/{id}', [ProfileController::class, 'show']);
Route::get('invoices', [InvoiceController::class, 'show']);
Route::post('save-invoice', [InvoiceController::class, 'saveInvoice'])->name('saveInvoice'); 
Route::get('fetch-invoices', [InvoiceController::class, 'fetchInvoices']);
Route::put('update-invoice/{id}', [InvoiceController::class, 'updateInvoice']);
Route::get('edit-invoice/{id}', [InvoiceController::class, 'edit']);
Route::delete('delete-invoice/{id}', [InvoiceController::class, 'destroy']);
require __DIR__.'/auth.php';
