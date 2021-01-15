<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 Tracker</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <style type="text/css">

    /* Table */
    #id{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        height: 30px;
        font-size: 14px;
    }

    #id td, #id th{
        border: 1px solid #ddd;
        padding: 8px;
    }

    #id tr:nth-child(even){
        background-color: #f2f2f2;
    }

    #id tr:hover{
        background-color: #ddd;
    }

    #id th{
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #1C64F2;
        color: black;
    }

    /* Heading */
    h2{
        margin-top: 20px;
    }

    /* Body */
    body{
        background: #f2f2f2;
        display: flex;
    }

    .section{
        margin-top: 30px;
        padding: 50px;
        background: #fff;
    }

    /* Dropdown */
    .dropbtn{
        background-color: #1C64F2;
        color: white;
        padding: 8px;
        font-size: 15px;
        border: none;
    }

    .dropdown{
        position: relative;
    }

    .dropdown-content{
        display: none;
        position: absolute;
        background-color: #f4f4f4;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        font-size: 15px;
    }

    .dropdown-content a{
        color: black;
        padding: 15px 15px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #1C64F2;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #495464;
    }
    </style>

    <body>
        <div class="container">
            <div class="col-md-8 section offset-md-2">
                <div class="panel panel-primary">
                <h1>Export Data</h1>
                <!-- Dropwdown button -->
                <div class="row">
                <div class="column px-3">
                <div class="dropdown">
                    <button class="dropbtn btn btn-dark rounded-pill px-5">Export</button>
                    <div class="dropdown-content">
                        <a href="{{ route('pdf.generate') }}">Export PDF File</a>
                        <a href="{{ route('excel.generate') }}">Patients.xlsx</a>
                        <a href="{{ route('excel1.generate') }}">Contacts.xlsx</a>
                        <a href="{{ route('excel2.generate') }}">Doctors.xlsx</a>
                        <a href="{{ route('csv.generate') }}">Patients.csv</a>
                        <a href="{{ route('csv1.generate') }}">Contacts.csv</a>
                        <a href="{{ route('csv2.generate') }}">Doctors.csv</a>
                    </div> <!-- end of dropdown content -->
                </div> <!-- end of dropdown -->
                </div>
                <div class="column">
                <a class="btn btn-dark rounded-pill px-5" href="{{ route('dashboard') }}"> Back</a>
                </div>
                </div>

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
                                <th class="text-left">Phone No.</th>
                                <th class="text-left">Region</th>
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
                                <td class="text-left">{{ $patient->phonenumber }}</td>
                                <td class="text-left">{{ $patient->region }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div><!-- end of main-div -->
                </div><!-- end of panel body -->

                <!-- Contacts Table -->
                <div class="panel-heading">
                    <h2>Contacts Record List</h2>
                </div> <!-- end of panel heading -->
                <div class="panel-body">
                    <div class="main-div">
                    <table id="id">
                        <thead>
                            <tr>
                                <th class="text-left">First Name</th>
                                <th class="text-left">Doctor ID</th>
                                <th class="text-left">Patient ID</th>
                                <th class="text-left">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($doctor_patient as $contact)
                            <tr>
                                <td class="text-left">{{ $contact->nickname }}</td>
                                <td class="text-left">{{ $contact->doctor_id }}</td>
                                <td class="text-left">{{ $contact->patient_id }}</td>
                                <td class="text-left">{{ $contact->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div><!-- end of main-div -->
                </div><!-- end of panel body -->

                <!-- Doctors Table -->
                <div class="panel-heading">
                    <h2>Doctors Record List</h2>
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
