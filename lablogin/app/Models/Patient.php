<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'status',
        'age',
        'gender',
        'phonenumber', 
        'region',
        'created_at',
        'updated_at',
    ];

    public function doctors(){
        return $this->belongsToMany(Doctor::class)->withTimestamps()->withPivot('firstname', 'lastname', 'age', 'gender', 'phonenumber', 'region');
    }

    protected $table ='patients';
    public static function getPatients()
    {
        $records = DB::table('patients')->select('firstname',
        'lastname',
        'status',
        'age',
        'gender',
        'phonenumber',
        'region',
        'created_at',
        'updated_at')->get()->toArray();
        return $records;
    }
   
}
