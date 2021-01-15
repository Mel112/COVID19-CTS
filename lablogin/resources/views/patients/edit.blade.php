<head>
    <title>trace.ph - Edit Patient</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Patient') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      

<div class="row">
    <div class="col-lg-12 margin-tb">
    <h1>Edit COVID-19 Patient</h1>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="px-1 py-1 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                <input type="text" name="firstname" value="{{ $patient->firstname }}" class="form-control rounded-pill" placeholder="First Name">

              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                <input type="text" name="lastname" value="{{ $patient->lastname }}" class="form-control rounded-pill" placeholder="Last Name">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="age" class="block text-sm font-medium leading-5 text-gray-700">Age</label>
                <input type="number" name="age" value="{{ $patient->age }}" class="form-control rounded-pill" placeholder="Age" min ="1">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="gender" class="block text-sm font-medium leading-5 text-gray-700">Gender</label>         
                <input type="radio" id="male" name="gender" value="Male" value="{{ $patient->gender }}" >
                    <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female" value="{{ $patient->gender }}" >
                    <label for="female">Female</label><br>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                        <select name="status" id="status">
                            <option value="Infected"  value="{{ $patient->status }}" name="status"  >Infected</option>
                            <option value="Symptomatic"  value="{{ $patient->status }}" name="status"  >Symptomatic</option>
                            <option value="Asymptomatic" value="{{ $patient->status }}" name="status"   >Asymptomatic</option>
                            
                        </select>              
                </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="region" class="block text-sm font-medium leading-5 text-gray-700">Region</label>
                <select name="region" id="region">
                            <option value="NCR" value="{{ $patient->region }}"  name="region" >NCR</option>
                            <option value="CAR"  value="{{ $patient->region }}"  name="region" >CAR</option>
                            <option value="Region I" value="{{ $patient->region }}"  name="region"   >Region I</option>
                            <option value="Region II" value="{{ $patient->region }}"  name="region"  > Region II</option>
                            <option value="Region III" value="{{ $patient->region }}"  name="region"  >Region III</option>
                            <option value="Region IV-A" value="{{ $patient->region }}"  name="region"  >Region IV-A</option>
                            <option value="Mimaropa"value="{{ $patient->region }}"   name="region"  >Mimaropa</option>
                            <option value="Region VI" value="{{ $patient->region }}" name="region"  >Region VI</option>
                            <option value="Region VII"value="{{ $patient->region }}" name="region"  >Region VII</option>
                            <option value="Region VIII" value="{{ $patient->region }}"  name="region" >Region VIII</option>
                            <option value="Region IX" value="{{ $patient->region }}" name="region"  >Region IX</option>
                            <option value="Region X" value="{{ $patient->region }}"  name="region"  >Region X</option>
                            <option value="Region XI" value="{{ $patient->region }}"  name="region"   >Region XI</option>
                            <option value="Region XII" value="{{ $patient->region }}"  name="region"   >Region XII</option>
                            <option value="Region XIII" value="{{ $patient->region }}" name="region"  >Region XIII</option>
                            <option value="BARMM" value="{{ $patient->region }}"  name="region"  >BARMM</option>
                        </select>
                
              </div>

              <div class="col-span-6 sm:col-span-3">
              <label for="phonenumber" class="block text-sm font-medium leading-5 text-gray-700">Phone Number</label>
              <input type="text" name="phonenumber" value="{{ $patient->phonenumber }}" class="form-control rounded-pill" placeholder="Phone number">              </div>
    </div>
    <br><br>


            <button type="button" class="btn btn-warning shadow-sm rounded-pill px-5" data-toggle="modal" data-target="#editStudentModal">Edit COVID-19 Patient</button>
        <a class="btn btn-dark rounded-pill" href="{{ route('patients.index') }}"> Back</a>
        <div id="editStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
            <div class="modal-header alert-warning">
                <h4 class="modal-title">Edit COVID-19 Patient</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure that you want to edit this COVID-19 Patient?</p>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-warning shadow-sm rounded-pill" value="Edit COVID-19 Patient">
                <button type="button" class="btn btn-dark shadow-sm rounded-pill px-5" data-dismiss="modal">No</button>
            </div>
            </div>

        </div>
        </div>
   
    </form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>