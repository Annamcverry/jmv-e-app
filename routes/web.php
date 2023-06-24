<?php

use App\Http\Controllers\ExchangeRateController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//All Employee 
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
})->middleware('can:is_admin')->name('admintimesheets');
// Route::get('/admintimesheets', [TimesheetController::class, 'adminView'], function() {
//     return view('admintimesheets');
// })->middleware(['auth', 'verified'])->name('admintimesheets');
// Route::get('/admintimesheets', [TimesheetController::class, 'adminView']);
Route::post('approve-timesheet/{id}', [TimesheetController::class, 'approveTimesheet'])->name('approveTimesheet');
Route::post('review-timesheet/{id}', [TimesheetController::class, 'reviewTimesheet'])->name('reviewTimesheet');

//Admin
Route::get('/invoices', [TimesheetController::class, 'allInvoices'],function() {
    return view('invoices');
})->middleware(['auth', 'verified'])->name('invoices');
// Route::get('/invoices', [TimesheetController::class, 'allInvoices']);
Route::get('/fetch-invoices', [TimesheetController::class, 'fetchInvoices']);

//Employee Invoices
Route::get('/myinvoices', [TimesheetController::class, 'myInvoices'],function() {
    return view('myinvoices');
})->middleware(['auth', 'verified'])->name('myinvoices');

//Job Listing Route
Route::get('/jobs', [JobListingController::class, 'index'],function() {
    return view('jobs');
})->middleware(['auth', 'verified'])->name('jobs');
// Route::get('/jobs', [JobListingController::class, 'index']);
Route::post('/save-job', [JobListingController::class, 'saveJob'])->name('/save-job');
Route::get('fetchJobs', [JobListingController::class, 'fetchJobs']);
Route::post('enquireJob/{id}', [JobListingController::class, 'enquireJob'])->name('enquireJob');

//Admin routes to view and edit employee info
Route::get('/employees', [ProfileController::class, 'index'],function() {
    return view('employees');
})->middleware('can:is_admin')->name('employees');
Route::put('update-user/{id}', [UserController::class, 'adminUpdateEmployee']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);

// Route::get('/employees', [ProfileController::class, 'index']);

//Exchange Rate Route
Route::post('saveExchangeRate', [ExchangeRateController::class, 'saveExchangeRate'])->name('saveExchangeRate');

require __DIR__.'/auth.php';
