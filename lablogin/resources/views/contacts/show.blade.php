<head>
    <title>trace.ph - Show Contact</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Contact') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl px-8 mx-auto sm:px-6 lg:px-8">     

                <div class="row">
    <div class="col-lg-12 margin-tb">
    <h1>Close Contact Profile</h1>
    </div>
</div>
<br>
   
    <div class="max-w-xl rounded-xl overflow-hidden shadow-lg my-2">
  <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Profile</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nickname:</strong>
                {{ $doctorPatient->nickname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Doctor ID:</strong>
                {{ $doctorPatient->doctor_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Patient ID:</strong>
                {{ $doctorPatient->patient_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created at:</strong>
                {{ $doctorPatient->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <a class="btn btn-dark rounded-pill px-5" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

            </div>
        </div>
    </div>
</x-app-layout>