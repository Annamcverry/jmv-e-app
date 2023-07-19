<?php

use App\Models\Timesheet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\ContractorInvoiceController;

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

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->middleware(['auth', 'verified'])->name('admindashboard');


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
// Route::get('/fetch-invoices', [TimesheetController::class, 'fetchInvoices']);

//Employee Invoices
Route::get('/myinvoices', [TimesheetController::class, 'myInvoices'],function() {
    return view('myinvoices');
})->middleware(['auth', 'verified'])->name('myinvoices');
// Route::get('fetch-myinvoices', [TimesheetController::class, 'fetchInvoices']);
Route::get('/payslip/pdf', [TimesheetController::class, 'PayslipPDF']);

//Job Listing Route
Route::get('/jobs', [JobListingController::class, 'index'],function() {
    return view('jobs');
})->middleware(['auth', 'verified'])->name('jobs');
Route::post('/save-job', [JobListingController::class, 'saveJob'])->name('saveJob');
Route::get('fetchJobs', [JobListingController::class, 'fetchJobs']);
Route::post('enquireJob/{id}', [JobListingController::class, 'enquireJob'])->name('enquireJob');

//Admin Job Listing and Enquiries Route
Route::get('/enquiries', [JobListingController::class, 'admin'],function() {
    return view('enquiries');
})->middleware(['auth', 'verified'])->name('enquiries');
Route::put('update-job/{id}', [JobListingController::class, 'update']);
Route::get('editJob/{id}', [JobListingController::class, 'edit'])->name('editJob');
Route::delete('deleteJob/{id}', [JobListingController::class, 'deleteJob'])->name('deleteJob');


//Admin routes to view and edit employee info
Route::get('/employees', [ProfileController::class, 'index'],function() {
    return view('employees');
})->middleware('can:is_admin')->name('employees');

Route::get('fetch-employees', [UserController::class, 'fetchEmployees'],function(){

})->middleware('can:is_admin')->name('fetch-employees');
// Route::get('fetch-employees', [UserController::class, 'fetchEmployees'])->middleware('can:is_admin');

Route::put('update-user/{id}', [UserController::class, 'adminUpdateEmployee'],function(){
})->middleware('can:is_admin');
Route::get('edit-user/{id}', [UserController::class, 'edit'],function(){
})->middleware('can:is_admin');
Route::post('save-user', [UserController::class, 'save']);
Route::delete('delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user/{id}');

//Exchange Rate Route
Route::get('/invoices', [TimesheetController::class, 'allInvoices', 'allExchangeRates'],function() {
    return view('invoices');
})->middleware(['auth', 'verified'])->name('invoices');
Route::post('saveExchangeRate', [TimesheetController::class, 'saveExchangeRate'])->name('saveExchangeRate');
Route::get('fetch-exchangeRates', [TimesheetController::class, 'allExchangeRates']);
Route::get('fetch-exchangeRates', [TimesheetController::class, 'fetchExchangeRates']);

//PDF Route 
Route::get('export_timesheet_pdf', [TimesheetController::class, 'export_timesheet_pdf'])->name('export_timesheet_pdf');

//Visualizations
// Route::get('/chart', [ChartController::class, 'index']);
Route::get('/chart', [ChartController::class, 'index'],function() {
    return view('chart');
})->middleware(['auth', 'verified'])->name('chart');
// Route::get('/hours', [ChartController::class, 'hoursWorkedPerWeek']);
Route::get('/hours', [ChartController::class, 'hoursWorkedPerWeek'],function() {
    return view('hours');
})->middleware(['auth', 'verified'])->name('hours');


//Contractor Page Routes
Route::get('/contractors',[ContractorController::class, 'index'], function() {
    return view('contractors');
})->middleware(['auth', 'verified'])->name('contractors');
Route::post('save-contractor', [ContractorController::class, 'save']);
Route::get('fetch-contractors', [ContractorController::class, 'fetchContractors']);
Route::put('update-contractor/{id}', [ContractorController::class, 'update']);
Route::get('edit-contractor/{id}', [ContractorController::class, 'edit']);
Route::delete('delete-contractor/{id}', [ContractorController::class, 'destroy']);

//Contractor Invoices Page Routes
// Route::get('/contractorinvoice',[ContractorInvoiceController::class, 'index'], function() {
//     return view('contractorinvoice');
// })->middleware(['auth', 'verified'])->name('contractorinvoice');
Route::get('/contractorinvoice', 'App\Http\Controllers\ContractorInvoiceController@index');
Route::post('save-invoice', [ContractorInvoiceController::class, 'save']);
Route::get('fetch-invoices', [ContractorInvoiceController::class, 'fetchContractorInvoices']);
Route::put('update-invoice/{id}', [ContractorInvoiceController::class, 'update']);
Route::get('edit-invoice/{id}', [ContractorInvoiceController::class, 'edit']);
Route::delete('delete-invoice/{id}', [ContractorInvoiceController::class, 'destroy']);

require __DIR__.'/auth.php';