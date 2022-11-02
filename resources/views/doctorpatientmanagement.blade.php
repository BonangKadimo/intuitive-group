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

<h2>PATIENT MANAGEMENT</h2>

<table>
  <tr>
    <th>Patient Names</th>
    <th>ID Number</th>
    <th>Date Of Birth</th>
    <th>CustomerNo</th>
    <th>Phone No</th>
    <th>Home location</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>7654433332</td>
    <td>22/12/1965</td>
    <td>323</td>
    <td>71235422</td>
    <td>Jwaneng</td>
  </tr>
  <tr>
    <td>Lesole Bafenyi</td>
    <td>7654433332</td>
    <td>12/03/1991</td>
    <td>456</td>
    <td>764343322</td>
    <td>Maun</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>7654433332</td>
    <td>22/12/1965</td>
    <td>323</td>
    <td>71235422</td>
    <td>Jwaneng</td>
  </tr>
  <tr>
    <td>Lesole Bafenyi</td>
    <td>7654433332</td>
    <td>12/03/1991</td>
    <td>456</td>
    <td>764343322</td>
    <td>Maun</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>7654433332</td>
    <td>22/12/1965</td>
    <td>323</td>
    <td>71235422</td>
    <td>Jwaneng</td>
  </tr>
  <tr>
    <td>Lesole Bafenyi</td>
    <td>7654433332</td>
    <td>12/03/1991</td>
    <td>456</td>
    <td>764343322</td>
    <td>Maun</td>
  </tr>
  
</table>

</body>
</html>

    
@endsection
