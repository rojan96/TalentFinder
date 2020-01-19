<html>
<title>Assignment 3</title>

<head>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>

<body>
</br>
<div class="container">
  <form action="flights.php" method="GET">
  <h2>Available Flights</h2>
                                                                                                    
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Airline Name</th>
        <th>Airline ID</th>
		<th></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>Southeast</td>
        <td>SE22</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
      <tr>
        <td>Northeast</td>
        <td>NB11</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
      <tr>
        <td>Eastblue</td>
        <td>E67</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
      <tr>
        <td>New Era</td>
        <td>N41</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
      <tr>
        <td>Beyond</td>
        <td>B85</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
      <tr>
        <td>Life Time</td>
        <td>LT32</td>
		<td><a href="book.php">BOOK</a></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

<?php
include "main.php";

?>

</body>