<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Close Contacts') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <h1>Close Contacts</h2>
<br>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left px-1 py-1">
                        <input type="text" id="input1" onkeyup="searchtracer()" class="float-left bg-gray-200 text-black py-2 px-4 rounded-full" placeholder="Search Doctors ID" title="Type something">
                        </div>
                        <div class="pull-left px-1 py-1">
                        <input type="text" id="input2" onkeyup="searchsuspect()" class="float-left bg-gray-200 text-black py-2 px-4 rounded-full" placeholder="Search Patients ID" title="Type something">
                        </div>
                        <div class="pull-right">
                        </div>
                    </div>
                </div>
<br>   
            @if (session()->has('message'))
            <div class="bg-blue-500 rounded-xl text-white px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif

            <table class="border table-fixed text-center" id="dtable">
                <thead>
                    <tr class="bg-gray-500 text-white">
                        <th onclick="sortTable(0)" class="px-4 py-2">Contact ID</th>
                        <th onclick="sortTable(1)" class="px-4 py-2">Nickname</th>
                        <th onclick="sortTable(2)" class="px-4 py-2">Doctors ID</th>
                        <th onclick="sortTable(3)" class="px-4 py-2">Patients ID</th>
                        <th onclick="sortTable(4)" class="px-4 py-2">Created at</th>
                        <th class="px-5 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctorPatient as $doctor)
                    <tr>
                        <td class="border">{{ $doctor->id }}</td>
                        <td class="border">{{ $doctor->nickname }}</td>
                        <td class="border">{{ $doctor->doctor_id }}</td>
                        <td class="border">{{ $doctor->patient_id }}</td>
                        <td class="border">{{ $doctor->created_at }}</td>
                        <td class="px-4 py-2 border">
                        <form action="{{ route('contacts.destroy',$doctor->id) }}" method="POST">
            
                                <a class="btn btn-primary rounded-pill" href="{{ route('contacts.show',$doctor->id) }}">Show</a>

                                <a class="btn btn-warning rounded-pill" href="{{ route('contacts.edit',$doctor->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="button" class="btn btn-danger shadow-sm rounded-pill" data-toggle="modal" data-target="#deleteStudentModal">Delete</button>
                                <div id="deleteStudentModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-dialog-centered">

                                    <div class="modal-content">
                                    <div class="modal-header alert-danger">
                                        <h4 class="modal-title">Delete Close Contact</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure that you want to delete this close contact?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-danger shadow-sm rounded-pill" value="Delete Close Contact">
                                        <button type="button" class="btn btn-dark shadow-sm rounded-pill px-5" data-dismiss="modal">No</button>
                                    </div>
                                    </div>

                                </div>
                                </div>

                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $doctorPatient->links() !!}
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
function searchtracer() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input1");
  filter = input.value.toUpperCase();
  table = document.getElementById("dtable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td2 = tr[i].getElementsByTagName("td")[2];

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

function searchsuspect() {
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