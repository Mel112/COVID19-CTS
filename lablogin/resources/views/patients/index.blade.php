
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patients') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<h1>COVID-19 Patients</h1> 
<br>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left px-1 py-1">
                        <input type="text" id="input1" onkeyup="searchID()" class="float-left bg-gray-200 text-black py-2 px-4 rounded-full" placeholder="Search ID" title="Type something"/>
                        </div>
                        <div class="pull-left px-1 py-1">
                        <input type="text" id="input2" onkeyup="searchstatus()" class="float-left bg-gray-200 text-black py-2 px-4 rounded-full" placeholder="Search Status" title="Type something"/>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success rounded-pill" href="{{ route('patients.create') }}"> + Add New COVID-19 Patient</a>
                        </div>
                    </div>
                </div> 
<br>   
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
        
                <table class="border table-fixed text-center" id ="dtable">
                <thead>
                    <tr class="bg-gray-500 text-white">
                        <th onclick="sortTable(0)" class="px-1 py-2 w-2">Patient ID</th>
                        <th onclick="sortTable(1)" class="px-2 py-2">First Name</th>
                        <th onclick="sortTable(2)" class="px-2 py-2">Last Name</th>
                        <th onclick="sortTable(3)" class="px-2 py-2 w-2">Status</th>
                        <th onclick="sortTable(4)" class="px-1 py-2 w-3">Age</th>
                        <th onclick="sortTable(5)" class="px-2 py-2 w-5">Gender</th>
                        <th onclick="sortTable(6)" class="px-3 py-2 w-5">Phone Number</th>
                        <th onclick="sortTable(7)" class="px-2 py-2">Region</th>
                        <th onclick="sortTable(8)" class="px-2 py-2">Created at</th>
                        <th onclick="sortTable(8)" class="px-2 py-2">Updated at</th>
                        <th class="px-3 py-2 w-30">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td class="border">{{ $patient->id }}</td>
                        <td class="border">{{ $patient->firstname }}</td>
                        <td class="border">{{ $patient->lastname }}</td>
                        <td class="border">{{ $patient->status }}</td>
                        <td class="border">{{ $patient->age }}</td>
                        <td class="border">{{ $patient->gender }}</td>
                        <td class="border">{{ $patient->phonenumber }}</td>
                        <td class="border">{{ $patient->region }}</td>
                        <td class="border">{{ $patient->created_at }}</td>
                        <td class="border">{{ $patient->updated_at }}</td>
                        <td class="px-4 py-2 border">
                        <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
            
                                <a class="btn btn-primary rounded-pill" href="{{ route('patients.show',$patient->id) }}">Show</a>

                                <a class="btn btn-warning rounded-pill" href="{{ route('patients.edit',$patient->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
                {!! $patients->links() !!}
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("dtable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<script>
function searchID() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input1");
  filter = input.value.toUpperCase();
  table = document.getElementById("dtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td2 = tr[i].getElementsByTagName("td")[0];

    if (td2) {
      txtValue = td2.textContent || td2.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchstatus() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input2");
  filter = input.value.toUpperCase();
  table = document.getElementById("dtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td2 = tr[i].getElementsByTagName("td")[3];

    if (td2) {
      txtValue = td2.textContent || td2.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>