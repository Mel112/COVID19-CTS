<?php

use App\Http\Livewire\Patients;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\DoctorPatients;
use App\Http\Controllers\DashboardController;
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
Route::get('pdf/preview1', [PDFController::class, 'preview1'])->name('pdf.preview1');
Route::get('pdf/preview2', [PDFController::class, 'preview2'])->name('pdf.preview2');
Route::get('pdf/preview3', [PDFController::class, 'preview3'])->name('pdf.preview3');
Route::get('pdf/preview4', [PDFController::class, 'preview4'])->name('pdf.preview4');
Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
Route::get('pdf1/generate', [PDFController::class, 'generate1'])->name('pdf1.generate');
Route::get('pdf2/generate', [PDFController::class, 'generate2'])->name('pdf2.generate');
Route::get('pdf3/generate', [PDFController::class, 'generate3'])->name('pdf3.generate');

//Excel 1
Route::get('/export-excel', [PDFController::class, 'exportExcel'])->name('excel.generate');
Route::get('/export-csv', [PDFController::class, 'exportCSV'])->name('csv.generate');

//Excel 2
Route::get('/export-excel1', [PDFController::class, 'exportExcel1'])->name('excel1.generate');
Route::get('/export-csv1', [PDFController::class, 'exportCSV1'])->name('csv1.generate');

//Excel 3
Route::get('/export-excel2', [PDFController::class, 'exportExcel2'])->name('excel2.generate');
Route::get('/export-csv2', [PDFController::class, 'exportCSV2'])->name('csv2.generate');