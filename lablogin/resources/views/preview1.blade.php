<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 Tracker</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="col-md-8 section offset-md-2">
                <div class="panel panel-primary">

<br><br><br>
                <!-- Patients Table -->
                <div class="panel-heading">
                    <h2>Patients Record List</h2>
                </div> <!-- end of panel heading -->
                <div class="panel-body">
                    <div class="main-div">
                    <table id="id">
                        <thead>
                            <tr>
                                <th class="text-left">First Name</th>
                                <th class="text-left">Last Name</th>
                                <th class="text-left">Status</th>
                                <th class="text-left">Age</th>
                                <th class="text-left">Gender</th>
                                <th class="text-left">Region</th>
                                <th class="text-left">Phone No.</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td class="text-left">{{ $patient->firstname }}</td>
                                <td class="text-left">{{ $patient->lastname }}</td>
                                <td class="text-left">{{ $patient->status }}</td>
                                <td class="text-left">{{ $patient->age }}</td>
                                <td class="text-left">{{ $patient->gender }}</td>
                                <td class="text-left">{{ $patient->region }}</td>
                                <td class="text-left">{{ $patient->phonenumber }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div><!-- end of main-div -->
                </div><!-- end of panel body -->
<br><br><br>
                <!-- Contacts Table -->
                <div class="panel-heading">
                    <h2>Close Contacts Record List</h2>
                </div> <!-- end of panel heading -->
                <div class="panel-body">
                    <div class="main-div">
                    <table id="id">
                        <thead>
                            <tr>
                                <th class="text-left">Contact ID</th>
                                <th class="text-left">Nick Name</th>
                                <th class="text-left">Phone Number</th>
                                <th class="text-left">Region</th>
                                <th class="text-left">Doctor ID</th>
                                <th class="text-left">Patient ID</th>
                                <th class="text-left">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($doctor_patient as $doctorpatient)
                            <tr>
                                <td class="text-left">{{ $doctorpatient->id }}</td>
                                <td class="text-left">{{ $doctorpatient->nickname }}</td>
                                <td class="text-left">{{ $doctorpatient->phonenumber }}</td>
                                <td class="text-left">{{ $doctorpatient->region }}</td>
                                <td class="text-left">{{ $doctorpatient->doctor_id }}</td>
                                <td class="text-left">{{ $doctorpatient->patient_id }}</td>
                                <td class="text-left">{{ $doctorpatient->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div><!-- end of main-div -->
                </div><!-- end of panel body -->

<br><br><br>
                <!-- Tracers Table -->
                <div class="panel-heading">
                    <h2>Contact Doctors Record List</h2>
                </div> <!-- end of panel heading -->
                <div class="panel-body">
                    <div class="main-div">
                    <table id="id">
                        <thead>
                            <tr>
                                <th class="text-left">First Name</th>
                                <th class="text-left">Last Name</th>
                                <th class="text-left">Age</th>
                                <th class="text-left">Gender</th>
                                <th class="text-left">Region</th>
                                <th class="text-left">Phone No.</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td class="text-left">{{ $doctor->firstname }}</td>
                                <td class="text-left">{{ $doctor->lastname }}</td>
                                <td class="text-left">{{ $doctor->age }}</td>
                                <td class="text-left">{{ $doctor->gender }}</td>
                                <td class="text-left">{{ $doctor->region }}</td>
                                <td class="text-left">{{ $doctor->phonenumber }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div><!-- end of main-div -->
                </div><!-- end of panel body -->

                </div> <!-- end of panel primary -->
            </div> <!-- end of col-md-8 -->
        </div> <!-- container -->
    </body>
</html>


