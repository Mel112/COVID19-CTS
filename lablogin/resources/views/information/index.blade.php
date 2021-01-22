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

<h1>User Manual</h1>
<br>
<div>

<br><br>
<h2>General</h2>
1. The user shall login to the system. If the user has no account yet, make use of the register functionality.
<br>2. If the user already has an account but only forgot the password, click the "Forgot the password?" link so that the user will be transferred to a form that asks for his email where the code, the user will use as password, will be transferred. 
<br>3. If the user had already logged in, he will be welcomed by the system's dashboard. The dashboard contains the graphical representations or charts of the data. There is also a small circle at the right side of the system where he could for messaging.
<br>4. On the left side of the system are the navigations or menus that the user could choose from: Dashboard, Patients, Close Contacts, Doctors, Export File and Information.
<br>5. When the user clicks the Patients' navigation, he will be welcomed by a table that contains the information of the COVID-19 patients such as their names, status, id etc.

<br><br>
<h2>Patients' Table</h2>
The Patients' table has lots of buttons and bars: 
<br>First, the add button (green) on the top-right of the system, the user could use that to enter new data in the table. 
<br>Second, the edit button (yellow) inside the Action column of the table, the user could use that to edit or update a data.
<br>Third, the view button (blue) inside the Action column of the table, the user could use that to show the data in a different link.
<br>Fourth, there are two search bars on the top left of the table where the user could search for the patient's ID and last name.

<br><br>When the user clicks the Close Contacts' navigation, he will be welcomed by a table that contains the information of the COVID-19 patients' close contacts such as their names, id, address, contact numbers etc.

<br><br>
<h2>Close Contacts' Table</h2>
The Close Contacts' table has lots of buttons and bars: 
<br>First, the add button (green) on the top-right of the system, the user could use that to enter new data in the table. 
<br>Second, the edit button (yellow) inside the Action column of the table, the user could use that to edit or update a data.
<br>Third, the view button (blue) inside the Action column of the table, the user could use that to show the data in a different link.
<br>Fourth, the delete button (red) inside the Action column of the table, the user could use that to delete the data from the database.
<br>Fifth, there are two search bars on the top left of the table where the user could search for the close contact's first name and last name.

<br><br>When the user clicks the Doctors' navigation, he will be welcomed by a table that contains the information of the hospital doctors such as their names, id, contact numbers etc.

<br><br>
<h2>Doctors' Table</h2>
The Doctors' table has lots of buttons and bars: 
<br>First, the add button (green) on the top-right of the system, the user could use that to enter new data in the table. 
<br>Second, the edit button (yellow) inside the Action column of the table, the user could use that to edit or update a data.
<br>Third, the view button (blue) inside the Action column of the table, the user could use that to show the data in a different link.
<br>Fourth, the delete button (red) inside the Action column of the table, the user could use that to delete the data from the database.
<br>Fifth, there are two search bars on the top left of the table where the user could search for the doctors' ID and last name.

<br><br>
<h2>Export Data</h2>
When the user clicks the Export File navigation, he will be welcomed by all the table and a dropdown button at the top left corner of the system, the user could choose between those options on what type and what table he would like to export or download the information: PDF, CSV and XCL.

<br><br>
<h2>Information</h2>
When the user clicks the Information navigation, he will see the information of the owner of the system, the numbers the user could contact in case of system errors. Also, this page serves as manual for new users.

</div>

</div>
</div>
</div>
 
</x-app-layout>
