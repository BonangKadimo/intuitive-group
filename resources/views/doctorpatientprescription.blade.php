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
  border: 1px solid #040e1f;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #040e1f;
}
</style>
</head>
<body>

<h2>PATIENT PRESCRIPTION</h2>

<table>
  <tr>
    <th>Date</th>
    <th>Drug/Medicine</th>
    <th>Dosage</th>
    <th>Times a Day</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>Paracetamol</td>
    <td>4</td>
    <td>3</td>
    <td>click to edit</td>
    <td>click to delete</td>
    
  </tr>
  <tr>
    <td>24/09/22</td>
    <td>Panado</td>
    <td>3</td>
    <td>3</td>
    <td>click to edit</td>
    <td>click to Delete</td>
  </tr>
  <tr>
    <td>23/07/22</td>
    <td>Paracetamol</td>
    <td>4</td>
    <td>3</td>
    <td>click to edit</td>
    <td>click to delete</td>
    
  </tr>
  <tr>
    <td>24/09/22</td>
    <td>Panado</td>
    <td>3</td>
    <td>3</td>
    <td>click to edit</td>
    <td>click to Delete</td>
  </tr>
</table>

</body>
</html>

    
@endsection