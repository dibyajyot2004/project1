<!DOCTYPE html>
<html lang="en">
<head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <style>
         .new {text-align: center;}
          </style>
</head>
<hr><hr>


<?php
session_start();
include 'conn.php';

$sql_student="select * from facilitiesmaster";

$result=mysqli_query($conn,$sql_student);


?>
<body>
<body style="background-color:white;">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#"><img src = "https://www.bing.com/th?id=OIP.AhP9IizEwMdcqZiSY1Bq-gHaGL&w=273&h=228&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2" height = "100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/silliconphpp/internphp/internphp/showdata.php">admin page <span class="sr-only">(current)</span></a>
</li>
             
				  <li class="nav-item active">
                
			  <a class="nav-link" href="http://localhost/silliconphpp/internphp/internphp/second.html">logout <span class="sr-only">(current)</span></a>
</li>
             
			  </ul>
           

          </nav>

 <form enctype="multipart/form-data" 
            class="well form-horizontal studentRegistration bv-form" 
            action="addfacility.php" 
            method="post">
            <div class="new">
                <br><br><br>
                <br><br><br>
        <label for="fname"style="color:black;">Add facility Here:</label>
  <input type="text" id="fname" name="fname">
  <button class="btn btn-primary btn-sm" type="submit" >ADD</button><br><br>
</div>
</form>
<table  id="myTable"style="color:black;margin-left:514px">
  <thead>
    <th>Facility_Id</th>
    <th>Facility_name</th>
    <th>Action</th>
  </thead>
  <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[0].'</td>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td><a href=delfacility.php?id='.$fetched_data[0].'>Delete</a></td>';
    echo '</tr>';
}


?>
</tbody>
</table>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );		
  </li>