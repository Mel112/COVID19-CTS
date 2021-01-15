<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Contact;

use Excel;
use App\Exports\ExcelExport;
use App\Exports\ContactExport;
use App\Exports\TracerExport;

use Livewire\WithPagination;

class PDFController extends Controller
{
    public function preview()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        $doctor_patient = Contact::all();
        return view('preview',compact('doctor_patient','doctors','patients'));
    }

    public function generatePDF()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        $doctor_patient = Contact::all();
        $pdf = PDF::loadView('preview',compact('doctor_patient','doctors','patients'));

        return $pdf->download('tracerecord.pdf');
    }


    public function excel()
    {
        $patients  = Patient::all();
        Patient::insert($patients);

        $contacts  = Contact::all();
        Contact::insert($contacts);

        $doctors  = Doctor::all();
        Doctor::insert($doctors);
        return " ";
    }

    public function exportExcel()
    {
        return Excel::download(new ExcelExport,'patient.xlsx');   
    }

    public function exportCSV()
    {
        return Excel::download(new ExcelExport,'patient.csv');
    }

    public function exportExcel1()
    {
        return Excel::download(new ContactExport,'contact.xlsx');
    }

    public function exportCSV1()
    {
        return Excel::download(new ContactExport,'contact.csv');
    }


    public function exportExcel2()
    {
        return Excel::download(new TracerExport,'doctor.xlsx');  
    }

    public function exportCSV2()
    {
                
        return Excel::download(new TracerExport,'doctor.csv');

    }


}