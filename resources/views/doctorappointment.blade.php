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

<h2>APPOINTMENTS</h2>

<table>
  <tr>
    <th>Patient Names</th>
    <th>Phone Number</th>
    <th>Appointment No</th>
    <th>Date</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
  <tr>
    <td>Bonang Kadimo</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
   <tr>
    <td>Joan Kehakae</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
  <tr>
    <td>Kabelo Gaogomotswe</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
  <tr>
    <td>Sethunya Gabana</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
  <tr>
    <td>Boago Mosidila</td>
    <td>7654433332</td>
    <td>123</td>
    <td>12/10/22</td>
    <td>08:00</td>
  </tr>
</table>

</body>
</html>

@endsection