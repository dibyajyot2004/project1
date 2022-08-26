<?php
      include 'conn.php';
      $category_id=$_REQUEST['id'];
      $dele="delete from category_master where category_id='$category_id';";
      $deleted=mysqli_query($conn,$dele);
       echo '<script>alert("successfully deleted");';
       if($delete=true)
       {
         header('location:addcategory.php');
       }
    ?>