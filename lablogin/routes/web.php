<?php

use App\Http\Livewire\Patients;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\DoctorPatients;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorsTableController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PieController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('doctors', Doctors::class)
    ->middleware(['auth:sanctum', 'verified'])
    ->name('doctors');

 // Pie chart representation of status and region     
Route::get('piechartregion', [PieController::class, 'googlePieChartRegion'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('piechartregion');    

Route::get('dashboard', [PieController::class, 'googlePieChartPatients'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('dashboard');    
        
Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorsTableController::class);
Route::resource('contacts', ContactController::class);
Route::resource('information', InformationController::class);


// PDF
Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
//Excel 1
Route::get('/export-excel', [PDFController::class, 'exportExcel'])->name('excel.generate');
Route::get('/export-csv', [PDFController::class, 'exportCSV'])->name('csv.generate');
//Excel 2
Route::get('/export-excel1', [PDFController::class, 'exportExcel1'])->name('excel1.generate');
Route::get('/export-csv1', [PDFController::class, 'exportCSV1'])->name('csv1.generate');
//Excel 3
Route::get('/export-excel2', [PDFController::class, 'exportExcel2'])->name('excel2.generate');
Route::get('/export-csv2', [PDFController::class, 'exportCSV2'])->name('csv2.generate');