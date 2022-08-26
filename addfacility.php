<?php
    session_start();
    include 'conn.php';

    $sql_stu="select * from studentdeets";
    $result=mysqli_query($conn,$sql_stu);
?>
<?php
  $add=$_REQUEST['fname'];
  $ins="insert into facilitiesmaster
  (facilityname) values('$add');";
  $insert=mysqli_query($conn,$ins);
  echo '<script>alert("successfully added");window.location.herf="adddata.php";</script>';
  if($insert=true)
      {
        header('location:adddata.php');
      }
      ?>
  ?>