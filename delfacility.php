<?php
      include 'conn.php';
      $facility_id=$_REQUEST['id'];
      $dele="delete from facilitiesmaster where facilityid='$facility_id';";
      $deleted=mysqli_query($conn,$dele);
      echo'<script>alert("sucessfully deleted");';
      if($deleted=true)
      {
        header('location:adddata.php');
      }
      ?>