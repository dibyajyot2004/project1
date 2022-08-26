<?php
include 'conn.php';
echo '<pre>';
print_r($_REQUEST);

print_r($_FILES);
/*foreach($_REQUEST as $k=>$v){
    $$k=mysqli_real_escape_string($conn,$v);
}*/
$firstnm=mysqli_real_escape_string($conn,$_REQUEST['1stnm']);
$lastnm=mysqli_real_escape_string($conn,$_REQUEST['lastnm']);
$mothernm=mysqli_real_escape_string($conn,$_REQUEST['mothernm']);
$fathernm=mysqli_real_escape_string($conn,$_REQUEST['fathernm']);
$gender=$_REQUEST['gender'];
$DOB=$_REQUEST['DOB'];
$category=$_REQUEST['category'];
$religion=$_REQUEST['religion'];
$email=$_REQUEST['email'];
$phnno=mysqli_real_escape_string($conn,$_REQUEST['phnno']);
$pradd=mysqli_real_escape_string($conn,$_REQUEST['pradd']);
$peradd=mysqli_real_escape_string($conn,$_REQUEST['peradd']);
$facilities=$_REQUEST['facilities'];

$photo_ar=$_FILES['photo'];
$photonm=$photo_ar['name'];
$time=time();
$filename=$time.$photonm;
move_uploaded_file($photo_ar['tmp_name'],"upload_image/$filename");

$sqlqr="insert into studentdeets(StudentID,Picture,FirstName,LastName,MotherName,FatherName,Gender,DateOfBirth,category_id,Religion,email,PhoneNumber,PresentAddress,PermanentAddress) values(NULL,'$filename','$firstnm','$lastnm','$mothernm','$fathernm','$gender','$DOB',$category,'$religion','$email','$phnno','$pradd','$peradd');";

$result=mysqli_query($conn,$sqlqr);
$studentid=mysqli_insert_id($conn);
foreach($facilities as $f_id){
    $sql_in="insert into facilitystudentmaster(facilitystudentID,facilityid,StudentID) 
    values(NULL,$f_id,$studentid)";
    $result_f=mysqli_query($conn,$sql_in);
}

if($result==true)
{
    header('location:empform.php');
}

?>