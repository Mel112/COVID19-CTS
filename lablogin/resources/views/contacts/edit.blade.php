<head>
    <title>trace.ph - Edit Contact</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Contact') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      

                <div class="row">
    <div class="col-lg-12 margin-tb">
    <h1>Edit Close Contact</h1>
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
  
    <form action="{{ route('contacts.update',$doctorPatient->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="px-1 py-1 bg-white sm:p-6">
            <div class="grid grid-cols-2 gap-3">
              <div class="col-span-2 sm:col-span-3">
                <label for="nickname" class="block text-sm font-medium leading-5 text-gray-700">Nickname</label>
                <input type="text" name="nickname" value="{{ $doctorPatient->nickname }}" class="form-control rounded-pill" placeholder="Nickname">

              </div>
              <div class="col-span-2 sm:col-span-3">
                <label for="doctor_id" class="block text-sm font-medium leading-5 text-gray-700">Doctor ID</label>
                <input type="number" name="doctor_id" value="{{ $doctorPatient->doctor_id }}" class="form-control rounded-pill" placeholder="Doctor ID" min="1">
              </div>

              <div class="col-span-2 sm:col-span-3">
                <label for="patient_id" class="block text-sm font-medium leading-5 text-gray-700">Patient ID</label>
                <input type="number" name="patient_id" value="{{ $doctorPatient ->patient_id }}" class="form-control rounded-pill" placeholder="Patient ID" min="1">
              </div>

              <div class="col-span-2 sm:col-span-3">
                <label for="created_at" class="block text-sm font-medium leading-5 text-gray-700">Created at</label>         
                <input type="date" name="created_at" value="{{ $doctorPatient->created_at }}" class="form-control rounded-pill" placeholder="Created at">
              </div>
    <br>    <div class="col-span-2 sm:col-span-3">
            <button type="button" class="btn btn-warning shadow-sm rounded-pill px-4" data-toggle="modal" data-target="#editStudentModal">Edit Close Contact</button>
        <a class="btn btn-dark rounded-pill py-2" href="{{ route('contacts.index') }}"> Back</a>
        <div id="editStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
            <div class="modal-header alert-warning">
                <h4 class="modal-title">Edit Student</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure that you want to edit this close contact?</p>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-warning shadow-sm rounded-pill" value="Edit Close Contact">
                <button type="button" class="btn btn-dark shadow-sm rounded-pill px-5" data-dismiss="modal">No</button>
            </div>
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