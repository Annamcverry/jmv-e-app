<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\UserController;
use App\Models\Timesheet;
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

// Route::get('/invoices', function () {

//     return view('invoices');
// })->middleware(['auth', 'verified'])->name('invoices');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('fetch-invoices', [InvoiceController::class, 'fetchInvoices']);
// Route::get('/user/{id}', [ProfileController::class, 'show']);
// Route::get('invoices', [InvoiceController::class, 'show']);
// Route::post('save-invoice', [InvoiceController::class, 'saveInvoice'])->name('saveInvoice'); 
// Route::get('fetch-invoices', [InvoiceController::class, 'fetchInvoices']);
// Route::put('update-invoice/{id}', [InvoiceController::class, 'updateInvoice']);
// Route::get('edit-invoice/{id}', [InvoiceController::class, 'edit']);
// Route::delete('delete-invoice/{id}', [InvoiceController::class, 'destroy']);
// Route::get('/employees', [UserController::class, 'fetchEmployees']);
// Route::get('/employees', function(){
//     return view('employees');
// });

Route::get('fetch-employees', [ProfileController::class, 'index']);

//Timesheet Routes
Route::get('/timesheet', function() {
    return view('timesheet');
})->middleware(['auth', 'verified'])->name('timesheet');
Route::post('save-timesheet', [TimesheetController::class, 'saveTimesheet']);
Route::get('fetch-timesheets', [TimesheetController::class, 'fetchTimesheets']);
Route::put('update-timesheet/{id}', [TimesheetController::class, 'update']);
Route::get('edit-timesheet/{id}', [TimesheetController::class, 'edit']);
Route::delete('delete-timesheet/{id}', [TimesheetController::class, 'destroy']);

Route::get('/admintimesheets', [TimesheetController::class, 'adminView'], function() {
    return view('admintimesheets');
})->middleware(['auth', 'verified'])->name('admintimesheets');
// Route::get('/admintimesheets', [TimesheetController::class, 'adminView']);
Route::post('approve-timesheet/{id}', [TimesheetController::class, 'approveTimesheet'])->name('approveTimesheet');
Route::post('review-timesheet/{id}', [TimesheetController::class, 'reviewTimesheet'])->name('reviewTimesheet');

Route::get('/invoices', [TimesheetController::class, 'allInvoices'],function() {
    return view('invoices');
})->middleware(['auth', 'verified'])->name('invoices');
// Route::get('/invoices', [TimesheetController::class, 'allInvoices']);
Route::get('/fetch-invoices', [TimesheetController::class, 'fetchInvoices']);


//Job Listing Route
Route::get('/jobs', [JobListingController::class, 'index'],function() {
    return view('jobs');
})->middleware(['auth', 'verified'])->name('jobs');
// Route::get('/jobs', [JobListingController::class, 'index']);
Route::post('saveJob', [JobListingController::class, 'saveJob'])->name('saveJob');
Route::get('fetchJobs', [JobListingController::class, 'fetchJobs']);
Route::post('enquireJob/{id}', [JobListingController::class, 'enquireJob'])->name('enquireJob');


Route::get('/employees', [ProfileController::class, 'index']);
require __DIR__.'/auth.php';
