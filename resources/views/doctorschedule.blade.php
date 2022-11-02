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

<h2>PATIENT HISTORY</h2>

<table>
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Event</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>08:00</td>
    <td>Patient consultation</td>
    <td>click to edit</td>
    <td>click to delete</td>
    
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>13:00</td>
    <td>Lunch</td>
    <td>click to edit</td>
    <td>click to Delete</td>
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>15:00</td>
    <td>Surgery</td>
    <td>click to edit</td>
    <td>click to delete</td>
    
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>19:00</td>
    <td>Knock off</td>
    <td>click to edit</td>
    <td>click to Delete</td>
  </tr>

  
   
</table>

</body>
</html>

    
@endsection