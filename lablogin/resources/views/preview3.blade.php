<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 Tracker (CLOSECONTACTS)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="col-md-8 section offset-md-2">
                <div class="panel panel-primary">

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


                </div> <!-- end of panel primary -->
            </div> <!-- end of col-md-8 -->
        </div> <!-- container -->
    </body>
</html>


