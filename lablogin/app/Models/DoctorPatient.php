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
        'nickname', 
        'phonenumber', 
        'region',     
        'doctor_id',
        'patient_id',
        'created_at',
    ];

    protected $table1 ='doctor_patient';
    public static function getDoctorPatient()
    {
        $records = DB::table('doctor_patient')->select('nickname',
        'phonenumber',
        'region',
        'doctor_id',
        'patient_id',
        'created_at',)->get()->toArray();
        return $records;
    }
}

