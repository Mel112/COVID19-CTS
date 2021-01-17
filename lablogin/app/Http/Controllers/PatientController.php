<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $patients = Patient::latest()->paginate(15);
    
        return view('patients.index',compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    	return view('patients.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $patient = Patient::create([
            'id' => $request->patient_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'status' => $request->status,
            'age' => $request->age,
            'gender' => $request->gender,
            'phonenumber' => $request->phonenumber,
            'region' => $request->region,
        ]);

        foreach ($request->doctorPatients as $doctorPatient) {
            $patient->doctors()->attach($doctorPatient['doctor_id'], ['nickname' => $doctorPatient['nickname'], 'phonenumber' => $doctorPatient['phonenumber'], 'region' => $doctorPatient['region']]);
        }

        return redirect()->route('patients.index')
                        ->with('success','A patient was added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'status'=>'required', 
            'age'=>'required',   
            'gender'=>'required',
            'phonenumber'=>'required',
            'region'=>'required',
            
        ]);

        $patient->update($request->all());
    
        return redirect()->route('patients.index')
                        ->with('success','A patient was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
    
        return redirect()->route('patients.index')
                        ->with('success','A patient was deleted successfully');
    }

    
}
