<?php

namespace App\Http\Controllers;
use App\Models\DoctorPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
        
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $doctorPatient = DoctorPatient::latest()->paginate(15);
    
        return view('contacts.index',compact('doctorPatient'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

            /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    	return view('contacts.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the shark
        $doctorPatient = doctorPatient::find($id);

        // show the view and pass the shark to it
        return view('contacts.show')
            ->with('doctorPatient', $doctorPatient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctorPatient = DoctorPatient::find($id);

        return view('contacts.edit')
            ->with('doctorPatient', $doctorPatient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nickname'=>'required',
            'phonenumber'=>'required',
            'region'=>'required',
            'doctor_id'=>'required',
            'patient_id'=>'required',
            'created_at'=>'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('contacts/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $doctorPatient = doctorPatient::find($id);
            $doctorPatient->nickname = Input::get('nickname');
            $doctorPatient->phonenumber = Input::get('phonenumber');
            $doctorPatient->region = Input::get('region');
            $doctorPatient->doctor_id  = Input::get('doctor_id');
            $doctorPatient->patient_id = Input::get('patient_id');
            $doctorPatient->created_at = Input::get('created_at');
            $doctorPatient->save();

            // redirect
            return redirect()->route('contacts.index')
            ->with('success','A contact was edited successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $doctorPatient = doctorPatient::find($id);
        $doctorPatient->delete();

        // redirect
        return redirect()->route('contacts.index')
                        ->with('success','A contact was deleted successfully');
    }

}
