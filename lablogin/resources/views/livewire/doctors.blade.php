<div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">        
                    
<div class="row">
    <div class="col-lg-12 margin-tb">
    <h1>Add COVID-19 Patient</h1>
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
   
    <form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="px-1 py-1 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="firstname" class="block text-sm font-medium leading-5 text-black">First name</label>
                <input type="text" name="firstname" class="form-control rounded-pill"
                   value="{{ old('firstname') }}" required class="form-control rounded-pill" placeholder="First Name">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="lastname" class="block text-sm font-medium leading-5 text-black">Last name</label>
                <input type="text" name="lastname" class="form-control rounded-pill"
                   value="{{ old('lastname') }}" required class="form-control rounded-pill" placeholder="Last Name">              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="age" class="block text-sm font-medium leading-5 text-black">Age</label>
                <input type="number" name="age" class="form-control rounded-pill"
                   value="{{ old('age') }}" required min = "1" class="form-control rounded-pill" placeholder="Age">              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="gender" class="block text-sm font-medium leading-5 text-black">Gender</label>
               
                <input type="radio" id="male" name="gender" value="Male" value="{{ old('gender') }}" >
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female" value="{{ old('gender') }}" >
                    <label for="female">Female</label>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="region" class="block text-sm font-medium leading-5 text-black">Region</label>
                    <select name="region" id="region">
                            <option value="NCR" value="{{ old('region') }}" name="region" >NCR</option>
                            <option value="CAR"  value="{{ old('region') }}" name="region" >CAR</option>
                            <option value="Region I" value="{{ old('region') }}" name="region" >Region I</option>
                            <option value="Region II" value="{{ old('region') }}" name="region" > Region II</option>
                            <option value="Region III" value="{{ old('region') }}" name="region" >Region III</option>
                            <option value="Region IV-A" value="{{ old('region') }}" name="region" >Region IV-A</option>
                            <option value="Mimaropa"value="{{ old('region') }}" name="region" >Mimaropa</option>
                            <option value="Region VI" value="{{ old('region') }}" name="region" >Region VI</option>
                            <option value="Region VII"value="{{ old('region') }}" name="region" >Region VII</option>
                            <option value="Region VIII" value="{{ old('region') }}" name="region" >Region VIII</option>
                            <option value="Region IX" value="{{ old('region') }}" name="region" >Region IX</option>
                            <option value="Region X" value="{{ old('region') }}" name="region" >Region X</option>
                            <option value="Region XI" value="{{ old('region') }}"  name="region" >Region XI</option>
                            <option value="Region XII" value="{{ old('region') }}" name="region" >Region XII</option>
                            <option value="Region XIII" value="{{ old('region') }}" name="region" >Region XIII</option>
                            <option value="BARMM" value="{{ old('region') }}" name="region" >BARMM</option>
                            
                        </select>

              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="status" class="block text-sm font-medium leading-5 text-black">Status</label>
                <select name="status" id="status">
                            <option value="Active"  value="{{ old('status') }}" name="status">Active</option>
                            <option value="Recovered"  value="{{ old('status') }}" name="status">Recovered</option>
                            <option value="Deceased"  value="{{ old('status') }}" name="status">Deceased</option>
                            
                        </select>              
                        </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="phonenumber" class="block text-sm font-medium leading-5 text-black">Phone Number</label>
                <input type="tel" name="phonenumber" class="form-control rounded-pill"
                   value="{{ old('phonenumber') }}" required class="form-control rounded-pill" placeholder="Phone Number" maxlength ="11">
              </div>
    </div>
<br><br>
    <div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Close Contacts</strong>
                            </div>

                            <div class="card-body">
                                <table class="table" id="contacts_table">
                                    @foreach ($doctorPatients as $index => $doctor)
                                    <thead>
                                    <tr>
                                        <th>Assigned To</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <tr>
                                    <td>
                                            <select name="doctorPatients[{{$index}}][doctor_id]"
                                        wire:model="doctorPatients.{{$index}}.doctor_id"
                                        class="form-control rounded-pill">
                                    <option value="">doctors list</option>
                                    @foreach ($allDoctors as $doctor)
                                        <option value="{{ $doctor->id }}">
                                        {{ $doctor->lastname }} {{ $doctor->firstname }}
                                        </option>
                                    @endforeach
                                </select>
                                </tr>
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                    </thead>
                                <tr>
                                            <td>
                                                <input type="text"
                                                    name="doctorPatients[{{$index}}][firstname]"
                                                    class="form-control rounded-pill"
                                                    wire:model="doctorPatients.{{$index}}.firstname" />
                                            </td>
                                            <td>
                                                <input type="text"
                                                    name="doctorPatients[{{$index}}][lastname]"
                                                    class="form-control rounded-pill"
                                                    wire:model="doctorPatients.{{$index}}.lastname" />
                                            </td>

                                </tr>
                                <thead>
                                    <tr>
                                        <th>Age</th>
                                        <th>Gender</th>
                                    </tr>
                                    </thead>
                                <tr>
                                            <td>
                                                <input type="number"
                                                    name="doctorPatients[{{$index}}][age]"
                                                    class="form-control rounded-pill"
                                                    wire:model="doctorPatients.{{$index}}.age" />
                                            </td>
                                            <td>
                                                <input type="radio" id="male" value="Male"
                                                    name="doctorPatients[{{$index}}][gender]"
                                                    wire:model="doctorPatients.{{$index}}.gender"/>
                                                    <label for="male">Male</label>

                                                    <input type="radio" id="female" value="Female"
                                                    name="doctorPatients[{{$index}}][gender]"
                                                    wire:model="doctorPatients.{{$index}}.gender"/>
                                                    <label for="female">Female</label>
                                            </td>

                                </tr>
                                        <thead>
                                            <tr>
                                                <th>Region</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                    <td>
                    <select name="doctorPatients[{{$index}}][region]" wire:model="doctorPatients.{{$index}}.region" id="region">
                            <option value="NCR" value="{{ old('region') }}" name="region" >NCR</option>
                            <option value="CAR"  value="{{ old('region') }}" name="region" >CAR</option>
                            <option value="Region I" value="{{ old('region') }}" name="region" >Region I</option>
                            <option value="Region II" value="{{ old('region') }}" name="region" > Region II</option>
                            <option value="Region III" value="{{ old('region') }}" name="region" >Region III</option>
                            <option value="Region IV-A" value="{{ old('region') }}" name="region" >Region IV-A</option>
                            <option value="Mimaropa"value="{{ old('region') }}" name="region" >Mimaropa</option>
                            <option value="Region VI" value="{{ old('region') }}" name="region" >Region VI</option>
                            <option value="Region VII"value="{{ old('region') }}" name="region" >Region VII</option>
                            <option value="Region VIII" value="{{ old('region') }}" name="region" >Region VIII</option>
                            <option value="Region IX" value="{{ old('region') }}" name="region" >Region IX</option>
                            <option value="Region X" value="{{ old('region') }}" name="region" >Region X</option>
                            <option value="Region XI" value="{{ old('region') }}"  name="region" >Region XI</option>
                            <option value="Region XII" value="{{ old('region') }}" name="region" >Region XII</option>
                            <option value="Region XIII" value="{{ old('region') }}" name="region" >Region XIII</option>
                            <option value="BARMM" value="{{ old('region') }}" name="region" >BARMM</option>
                            
                        </select>
                        </td>
                                            <td>
                                                <input type="tel"
                                                    name="doctorPatients[{{$index}}][phonenumber]"
                                                    class="form-control rounded-pill"
                                                    wire:model="doctorPatients.{{$index}}.phonenumber" maxlength ="11" />
                                            </td>
                                            <td>
                                            <button class="btn btn-sm btn-danger rounded-pill"
                                            wire:click.prevent="removeContact({{$index}})">
                                            Delete</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                        @endforeach
                                </table>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-primary rounded-pill"
                                            wire:click.prevent="addContact">+ Add Another Close Contact</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
    <br>
        <button type="button" class="btn btn-success shadow-sm rounded-pill px-3" data-toggle="modal" data-target="#addStudentModal">+ Add New COVID-19 Patient</button>
        <a class="btn btn-dark rounded-pill " href="{{ route('patients.index') }}"> Back</a>
        <div id="addStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
            <div class="modal-header alert-success">
                <h4 class="modal-title">Add New COVID-19 Patient</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure that you want to add this COVID-19 Patient?</p>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success shadow-sm rounded-pill" value="+ Add New COVID-19 Patient">
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


