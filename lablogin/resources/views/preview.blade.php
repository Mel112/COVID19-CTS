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
   <div class="grid gap-6 mb-8 md:grid-cols-1">
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
    <a class="dropdown-item" href="{{ route('pdf2.generate') }}" :active="request()->routeIs('pdf2.generate')">CloseContacts Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('pdf3.generate') }}" :active="request()->routeIs('pdf3.generate')">Doctors Record (PDF)</a>
    <a class="dropdown-item" href="{{ route('excel.generate') }}" :active="request()->routeIs('excel.generate')">Patients.xslx</a>
    <a class="dropdown-item" href="{{ route('excel1.generate') }}" :active="request()->routeIs('excel1.generate')">CloseContacts.xslx</a>
    <a class="dropdown-item" href="{{ route('excel2.generate') }}" :active="request()->routeIs('excel2.generate')">Doctors.xslx</a>
    <a class="dropdown-item" href="{{ route('csv.generate') }}" :active="request()->routeIs('csv.generate')">Patients.csv</a>
    <a class="dropdown-item" href="{{ route('csv1.generate') }}" :active="request()->routeIs('csv1.generate')">CloseContacts.csv</a>
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
                <th class="px-8 py-2 w-10">FirstName</th>
                <th class="px-8 py-2 w-10">LastName</th>
                <th class="px-8 py-2 w-10">Status</th>
                <th class="px-8 py-2 w-10">Age</th>
                <th class="px-8 py-2 w-10">Gender</th>
                <th class="px-8 py-2 w-10">PhoneNo.</th>
                <th class="px-8 py-2 w-10">Region</th>
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
                </tr>
            @endforeach
            </tbody>
    </table>

<!-- table 2 -->
<!-- Suspects Table -->
<br><br><br>
<div class="panel-heading">
    <h5>Close Contacts Record List</h5>
</div> <!-- end of panel heading -->
    <table class="border table-fixed text-center">
        <thead>
            <tr class="bg-gray-500 text-white">
                <th class="px-8 py-2 w-10">Contact ID</th>
                <th class="px-8 py-2 w-10">NickName</th>
                <th class="px-8 py-2 w-10">Phone Number</th>
                <th class="px-8 py-2 w-10">Region</th>
                <th class="px-8 py-2 w-10">Doctor ID</th>
                <th class="px-8 py-2 w-10">Patient ID</th>
                <th class="px-8 py-2 w-10">Created At</th>
            </tr>
        </thead>
            <tbody>
            @foreach($doctor_patient as $doctorpatient)
                <tr>
                    <td class="border">{{ $doctorpatient->id }}</td>
                    <td class="border">{{ $doctorpatient->nickname }}</td>
                    <td class="border">{{ $doctorpatient->phonenumber }}</td>
                    <td class="border">{{ $doctorpatient->region }}</td>
                    <td class="border">{{ $doctorpatient->doctor_id }}</td>
                    <td class="border">{{ $doctorpatient->patient_id }}</td>
                    <td class="border">{{ $doctorpatient->created_at }}</td>
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
                <th class="px-8 py-2 w-10">FirstName</th>
                <th class="px-8 py-2 w-10">LastName</th>
                <th class="px-8 py-2 w-10">Age</th>
                <th class="px-8 py-2 w-10">Gender</th>
                <th class="px-8 py-2 w-10">PhoneNo.</th>
                <th class="px-8 py-2 w-10">Region</th>
            </tr>
        </thead>
            <tbody>
            @foreach($doctors as $doctor)
                <tr>
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
