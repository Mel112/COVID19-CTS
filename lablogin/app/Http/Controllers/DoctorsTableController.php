<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsTableController extends Controller
{
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $doctors = Doctor::latest()->paginate(20);
    
        return view('doctors.index',compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    	return view('doctors.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $doctor = Doctor::create([
            'id' => $request->doctor_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'gender' => $request->gender,
            'region' => $request->region,
            'phonenumber' => $request->phonenumber,
        ]);

        return redirect()->route('doctors.index')
                        ->with('success','A doctor was added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'age'=>'required',   
            'gender'=>'required',
            'phonenumber'=>'required',
            'region'=>'required',

        ]);

        $doctor->update($request->all());
    
        return redirect()->route('doctors.index')
                        ->with('success','A doctor was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
    
        return redirect()->route('doctors.index')
                        ->with('success','A doctor was deleted successfully');
    }

}
