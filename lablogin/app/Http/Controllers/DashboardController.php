<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $patients = Patient::all();

        $data = DB::table('patients')
        ->select(
         DB::raw('status as status'),
         DB::raw('count(*) as number'))
        ->groupBy('status')
        ->get();
     $array[] = ['Status', 'Number'];
     foreach($data as $key => $value)
     {
       $array[++$key] = [$value->status, $value->number];
     }
     return view('dashboard',compact('patients'))->with('status', json_encode($array));
    }
}
