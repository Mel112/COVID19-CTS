<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Patient;
use App\Models\DoctorPatient;
use App\Models\Doctor;

use Excel;
use App\Exports\ExcelExport;
use App\Exports\ContactExport;
use App\Exports\TracerExport;

use Livewire\WithPagination;

class PDFController extends Controller
{
    public function preview()
    {
        $patients = Patient::all();
        $doctor_patient = DoctorPatient::all();
        $doctors = Doctor::all();
        return view('preview',compact('doctor_patient','doctors','patients'));
    }

    public function generatePDF()
    {
        $patients = Patient::all();
        $doctor_patient = DoctorPatient::all();
        $doctors = Doctor::all();
        $pdf = PDF::loadView('preview1',compact('doctor_patient','doctors','patients'));

        return $pdf->download('trace(allrecord).pdf');
    }

    public function generate1()
    {
        $patients = Patient::all();
        $doctor_patient = DoctorPatient::all();
        $doctors = Doctor::all();
        $pdf1 = PDF::loadView('preview2',compact('doctor_patient','doctors','patients'));

        return $pdf1->download('trace(patients).pdf');
    }

    public function generate2()
    {
        $patients = Patient::all();
        $doctor_patient = DoctorPatient::all();
        $doctors = Doctor::all();
        $pdf2 = PDF::loadView('preview3',compact('doctor_patient','doctors','patients'));

        return $pdf2->download('trace(closecontacts).pdf');
    }

    public function generate3()
    {
        $patients = Patient::all();
        $doctor_patient = DoctorPatient::all();
        $doctors = Doctor::all();
        $pdf3 = PDF::loadView('preview4',compact('doctor_patient','doctors','patients'));

        return $pdf3->download('trace(doctors).pdf');
    }


    public function excel()
    {
        $patients  = Patient::all();
        Patient::insert($patients);

        $doctor_patient = DoctorPatient::all();
        DoctorPatient::insert($doctor_patient);

        $doctors  = Doctor::all();
        Doctor::insert($doctors);
        return " ";
    }

    public function exportExcel()
    {
        return Excel::download(new ExcelExport,'patients.xlsx');   
    }

    public function exportCSV()
    {
        return Excel::download(new ExcelExport,'patients.csv');
    }

    public function exportExcel1()
    {
        return Excel::download(new ContactExport,'doctor_patient.xlsx');
    }

    public function exportCSV1()
    {
        return Excel::download(new ContactExport,'doctor_patient.csv');
    }


    public function exportExcel2()
    {
        return Excel::download(new TracerExport,'doctors.xlsx');  
    }

    public function exportCSV2()
    {
                
        return Excel::download(new TracerExport,'doctors.csv');

    }


}