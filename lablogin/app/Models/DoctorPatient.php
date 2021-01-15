<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPatient extends Model
{
    use HasFactory;

    protected $table = 'doctor_patient';
    protected $fillable = [
        'nickname', 
        'doctor_id',
        'patient_id',
        'created_at',
    ];
}
