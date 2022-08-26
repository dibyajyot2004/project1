<?php
    session_start();
    include 'conn.php';

    $sql_stu="select * from studentdeets";
    $result=mysqli_query($conn,$sql_stu);
?>
<?php
  $add=$_REQUEST['fname'];
  $ins="insert into category_master
  (category_name) values('$add');";
  $insert=mysqli_query($conn,$ins);
  echo '<script>alert("successfully added");window.location.herf="adddata.php";</script>';
  if($insert=true)
  {
    header('location:addcategory.php');
  }
  ?>