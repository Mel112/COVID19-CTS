<head>
    <title>trace.ph - Create Doctor</title>
</head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">        
                    
<div class="row">
    <div class="col-lg-12 margin-tb">
    <h1>Add New Doctor</h1>
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
   
<form action="{{ route('doctors.store') }}" method="POST">
    @csrf

    <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="px-1 py-1 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                <input type="text" name="firstname" class="form-control rounded-pill" placeholder="First Name">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                <input type="text" name="lastname" class="form-control rounded-pill" placeholder="Last Name">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="age" class="block text-sm font-medium leading-5 text-gray-700">Age</label>
                <input type="number" name="age" class="form-control rounded-pill" placeholder="Age">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="gender" class="block text-sm font-medium leading-5 text-gray-700">Gender</label>
               
                <input type="radio" id="male" name="gender" value="Male"  >
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female" >
                    <label for="female">Female</label>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="region" class="block text-sm font-medium leading-5 text-gray-700">Region</label>
                <select name="region" id="region">
                            <option value="NCR"  name="region" >NCR</option>
                            <option value="CAR"   name="region" >CAR</option>
                            <option value="Region I"  name="region" >Region I</option>
                            <option value="Region II"  name="region" > Region II</option>
                            <option value="Region III"  name="region" >Region III</option>
                            <option value="Region IV-A"  name="region" >Region IV-A</option>
                            <option value="Mimaropa" name="region" >Mimaropa</option>
                            <option value="Region VI"  name="region" >Region VI</option>
                            <option value="Region VII" name="region" >Region VII</option>
                            <option value="Region VIII"  name="region" >Region VIII</option>
                            <option value="Region IX"  name="region" >Region IX</option>
                            <option value="Region X"  name="region" >Region X</option>
                            <option value="Region XI"   name="region" >Region XI</option>
                            <option value="Region XII"  name="region" >Region XII</option>
                            <option value="Region XIII"  name="region" >Region XIII</option>
                            <option value="BARMM"  name="region" >BARMM</option>
                            
                        </select>

              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="phonenumber" class="block text-sm font-medium leading-5 text-gray-700">Phone Number</label>
                <input type="text" name="phonenumber" class="form-control rounded-pill" placeholder="Phone Number">
              </div>
    </div>
    <br><br>
        <button type="button" class="btn btn-success shadow-sm rounded-pill px-3" data-toggle="modal" data-target="#addStudentModal">+ Add New Doctor</button>
        <a class="btn btn-dark rounded-pill " href="{{ route('doctors.index') }}"> Back</a>
        <div id="addStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
            <div class="modal-header alert-success">
                <h4 class="modal-title">Add New Contact Doctor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure that you want to add this doctor?</p>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success shadow-sm rounded-pill" value="+ Add New Contact Doctor">
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