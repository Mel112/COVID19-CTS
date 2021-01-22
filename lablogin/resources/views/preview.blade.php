<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="flex items-center bg-gray-200 text-gray-800">
  <div class="p-1 w-full"></div>
</div>

      <div class="mx-5 pt-5">
   <div class="grid gap-2 mb-8 md:grid-cols-1">
      <div class="min-w-0 p-4 text-gray-800 bg-white rounded-xl shadow-sm">
      <h1 class="mb-4 font-semibold">
        Export COVID19 Data
      </h1>

  <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Download File
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ route('pdf.generate') }}" :active="request()->routeIs('pdf.generate')">All Data Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('pdf1.generate') }}" :active="request()->routeIs('pdf1.generate')">Patients Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('pdf2.generate') }}" :active="request()->routeIs('pdf2.generate')">CloseContact Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('pdf3.generate') }}" :active="request()->routeIs('pdf3.generate')">Doctors Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('excel.generate') }}" :active="request()->routeIs('excel.generate')">Patients.xslx</a>
    <a class="dropdown-item" href="{{ route('excel1.generate') }}" :active="request()->routeIs('excel1.generate')">CloseContact.xslx</a>
    <a class="dropdown-item" href="{{ route('excel2.generate') }}" :active="request()->routeIs('excel2.generate')">Doctors.xslx</a>
    <a class="dropdown-item" href="{{ route('csv.generate') }}" :active="request()->routeIs('csv.generate')">Patients.csv</a>
    <a class="dropdown-item" href="{{ route('csv1.generate') }}" :active="request()->routeIs('csv1.generate')">CloseContact.csv</a>
    <a class="dropdown-item" href="{{ route('csv2.generate') }}" :active="request()->routeIs('csv2.generate')">Doctors.csv</a>
  </div>

<!-- table -->
<!-- Suspects Table -->
<br><br><br>
<div class="panel-heading">
    <h5>Patients Record List</h5>
</div> <!-- end of panel heading -->
    <table class="border table-fixed text-center">
        <thead>
            <tr class="bg-gray-500 text-white">
                <th class="px-1 py-2 w-2">FirstName</th>
                <th class="px-1 py-2 w-2">LastName</th>
                <th class="px-1 py-2 w-2">Status</th>
                <th class="px-1 py-2 w-2">Age</th>
                <th class="px-1 py-2 w-2">Gender</th>
                <th class="px-1 py-2 w-2">PhoneNo.</th>
                <th class="px-1 py-2 w-2">Region</th>
                <th class="px-1 py-2 w-2">CreatedAt</th>
                <th class="px-1 py-2 w-2">UpdatedAt</th>
            </tr>
        </thead>
            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td class="border">{{ $patient->firstname }}</td>
                    <td class="border">{{ $patient->lastname }}</td>
                    <td class="border">{{ $patient->status }}</td>
                    <td class="border">{{ $patient->age }}</td>
                    <td class="border">{{ $patient->gender }}</td>
                    <td class="border">{{ $patient->phonenumber }}</td>
                    <td class="border">{{ $patient->region }}</td>
                    <td class="border">{{ $patient->created_at }}</td>
                    <td class="border">{{ $patient->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>

<!-- table 2 -->
<!-- Suspects Table -->
<br><br><br>
<div class="panel-heading">
    <h5>Close Contact Record List</h5>
</div> <!-- end of panel heading -->
    <table class="border table-fixed text-center">
        <thead>
            <tr class="bg-gray-500 text-white">
                <th class="px-1 py-2 w-2">ContactID</th>
                <th class="px-1 py-2 w-2">FirstName</th>
                <th class="px-1 py-2 w-2">LastName</th>
                <th class="px-1 py-2 w-2">Age</th>
                <th class="px-1 py-2 w-2">Gender</th>
                <th class="px-1 py-2 w-2">Phone Number</th>
                <th class="px-1 py-2 w-2">Region</th>
                <th class="px-1 py-2 w-2">DoctorID</th>
                <th class="px-1 py-2 w-2">PatientID</th>
                <th class="px-1 py-2 w-2">Created At</th>
                <th class="px-1 py-2 w-2">Updated At</th>
            </tr>
        </thead>
            <tbody>
            @foreach($doctor_patient as $doctorpatient)
                <tr>
                    <td class="border">{{ $doctorpatient->id }}</td>
                    <td class="border">{{ $doctorpatient->firstname }}</td>
                    <td class="border">{{ $doctorpatient->lastname }}</td>
                    <td class="border">{{ $doctorpatient->age }}</td>
                    <td class="border">{{ $doctorpatient->gender }}</td>
                    <td class="border">{{ $doctorpatient->phonenumber }}</td>
                    <td class="border">{{ $doctorpatient->region }}</td>
                    <td class="border">{{ $doctorpatient->doctor_id }}</td>
                    <td class="border">{{ $doctorpatient->patient_id }}</td>
                    <td class="border">{{ $doctorpatient->created_at }}</td>
                    <td class="border">{{ $doctorpatient->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>

<!-- table 3 -->
<!-- Suspects Table -->
<br><br><br>
<div class="panel-heading">
    <h5>Doctors Record List</h5>
</div> <!-- end of panel heading -->
    <table class="border table-fixed text-center">
        <thead>
            <tr class="bg-gray-500 text-white">
                <th class="px-1 py-2 w-2">DoctorID</th>
                <th class="px-1 py-2 w-2">FirstName</th>
                <th class="px-1 py-2 w-2">LastName</th>
                <th class="px-1 py-2 w-2">Age</th>
                <th class="px-1 py-2 w-2">Gender</th>
                <th class="px-1 py-2 w-2" >PhoneNo.</th>
                <th class="px-1 py-2 w-2">Region</th>
            </tr>
        </thead>
            <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td class="border">{{ $doctor->id }}</td>
                    <td class="border">{{ $doctor->firstname }}</td>
                    <td class="border">{{ $doctor->lastname }}</td>
                    <td class="border">{{ $doctor->age }}</td>
                    <td class="border">{{ $doctor->gender }}</td>
                    <td class="border">{{ $doctor->phonenumber }}</td>
                    <td class="border">{{ $doctor->region }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
   

</div> <!-- end of div -->

<br><br>
<div id="pie_chart"></div>
</div>
</div>
</div>
<script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>
</script>  
</x-app-layout>
