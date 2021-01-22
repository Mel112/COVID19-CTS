<!DOCTYPE html>
<html>
    <head>
        <title>CloseContacts_TracePH</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <style>
        #id{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            height: 20px;
            font-size: 12px;
        }
        #id td, #emp th{
            border: 1px solid #ddd;
            padding: 5px;
        }
        #id tr:nth-child(even){
            background-color: #deeaee;
        }
        #id th{
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: center;
            background-color: #ddd;
        }
    </style>

    <body>
    
<div class="container">
    <div class="col-md-8 section offset-md-2">
        <div class="panel panel-primary">

        <?=$dt = new Carbon();
        echo '<br>';
        $dt->timezone('Etc/GMT-8'); 
        echo 'Date and Time Exported:';
        echo '<br>';
        echo $dt->toDayDateTimeString();             
    ?>  


<br><br><br><!-- Contacts Table -->
<div class="panel-heading">
     <h2>Close Contact Record List</h2>
</div> <!-- end of panel heading -->
<div class="panel-body">
    <div class="main-div">
        <table id="id">
        <thead>
            <tr>
            <th class="text-left">Contact ID</th>
            <th class="text-left">FirstName</th>
            <th class="text-left">LastName</th>
            <th class="text-left">Age</th>
            <th class="text-left">Gender</th>
            <th class="text-left">Phone Number</th>
            <th class="text-left">Region</th>
            <th class="text-left">Doctor ID</th>
            <th class="text-left">Patient ID</th>
            <th class="text-left">Created At</th>
            <th class="text-left">Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctor_patient as $doctorpatient)
            <tr>
            <td class="text-left">{{ $doctorpatient->id }}</td>
            <td class="text-left">{{ $doctorpatient->firstname }}</td>
            <td class="text-left">{{ $doctorpatient->lastname }}</td>
            <td class="text-left">{{ $doctorpatient->age }}</td>
            <td class="text-left">{{ $doctorpatient->gender }}</td>
            <td class="text-left">{{ $doctorpatient->phonenumber }}</td>
            <td class="text-left">{{ $doctorpatient->region }}</td>
            <td class="text-left">{{ $doctorpatient->doctor_id }}</td>
            <td class="text-left">{{ $doctorpatient->patient_id }}</td>
            <td class="text-left">{{ $doctorpatient->created_at }}</td>
            <td class="text-left">{{ $doctorpatient->updated_at }}</td>
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


