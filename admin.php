<?php
session_start();
include 'conn.php';
echo '<pre>';
print_r($_SESSION);
$username=$_REQUEST['usernm'];
$pass=$_REQUEST['pass'];
$sql_query="select * from admin_login where username='$username' and password='$pass' and status='active';";
$result=mysqli_query($conn,$sql_query);
$rows=mysqli_num_rows($result);
$res_row=mysqli_fetch_row($result);
if($rows==1){
    $_SESSION['name']=$res_row[1];
    $_SESSION['logged_in']=true;
    header("location: showdata.php");
}
else{
    //echo "<script>alert('Invalid password or username');</script>";
    header("location: admin.html");
    session_unset();
}
?>