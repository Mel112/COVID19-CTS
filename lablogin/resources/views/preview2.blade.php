<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19 PATIENT Tracer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <style>
        #id{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #id td, #emp th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #id tr:nth-child(even){
            background-color: #deeaee;
        }
        #id th{
            padding-top: 12px;
            padding-bottom: 12px;
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

<br><br><br><!-- Patients Table -->
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


                </div> <!-- end of panel primary -->
            </div> <!-- end of col-md-8 -->
        </div> <!-- container -->
    </body>
</html>


