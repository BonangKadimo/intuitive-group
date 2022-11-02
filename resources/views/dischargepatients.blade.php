@extends('layouts.doclayout')
@section('content')
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>PATIENT PRESCRIPTION</h2>

<table>
  <tr>
    <th>Date</th>
    <th>Condition</th>
    <th>Doctor's Advise</th>
    <th>Check Up date</th>
    <th>Doctor's Name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>Better</td>
    <td>Avoid stress</td>
    <td>23/08/22</td>
    <td>Dr Bones</td>
    <td>click to edit</td>
    <td>click to delete</td>
    
  </tr>
  <tr>
    <td>24/09/22</td>
    <td>whole</td>
    <td>Follow the Prescription</td>
    <td>N/A</td>
    <td>Dr Bones</td>
    <td>click to edit</td>
    <td>click to Delete</td>
  </tr>
  
</table>

</body>
</html>

    
@endsection