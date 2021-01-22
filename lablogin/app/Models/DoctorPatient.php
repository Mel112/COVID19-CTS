<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorPatient extends Model
{
    use HasFactory;

    protected $table = 'doctor_patient';
    protected $fillable = [
        'firstname',
        'lastname', 
        'age',
        'gender',
        'phonenumber', 
        'region',     
        'doctor_id',
        'patient_id',
        'created_at',
        'updated_at',
    ];

    protected $table1 ='doctor_patient';
    public static function getDoctorPatient()
    {
        $records = DB::table('doctor_patient')->select('firstname',
        'lastname',
        'age',
        'gender',
        'phonenumber',
        'region',
        'doctor_id',
        'patient_id',
        'created_at',
        'updated_at',)->get()->toArray();
        return $records;
    }
}

