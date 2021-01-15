<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'age',
        'gender',
        'region',
        'phonenumber', 
    ];

    // Export Excel
    protected $table2 ='doctors';
    public static function getDoctors()
    {
        $records = DB::table('doctors')->select('firstname',
        'lastname',
        'age',
        'gender',
        'region',
        'phonenumber')->get()->toArray();
        return $records;
    }
}
