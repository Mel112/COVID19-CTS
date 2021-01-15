<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PieController extends Controller
{
    public function googlePieChartPatients()
    {
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
        return view('dashboard')->with('status', json_encode($array));
    }

    public function googlePieChartRegion()
    {
        $data = DB::table('patients')
           ->select(
            DB::raw('region as region'),
            DB::raw('count(*) as number'))
           ->groupBy('region')
           ->get();
        $array[] = ['Region', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->region, $value->number];
        }
        return view('pieChartRegion')->with('region', json_encode($array));
    }
}
