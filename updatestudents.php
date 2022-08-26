<?php
include 'conn.php';
echo '<pre>';
print_r($_REQUEST);

print_r($_FILES);
/*foreach($_REQUEST as $k=>$v){
    $$k=mysqli_real_escape_string($conn,$v);
}*/
$StudentID=$_REQUEST['student_id'];
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

/*$photo_ar=$_FILES['photo'];
$photonm=$photo_ar['name'];
$time=time();
$filename=$time.$photonm;
move_uploaded_file($photo_ar['tmp_name'],"upload_image/$filename");
$sql_tran='start_transaction';*/
$action=$_REQUEST['actiontype'];
if($action=='edit'){
    $sqlqr="update studentdeets
    set FirstName='$firstnm',LastName='$lastnm',MotherName='$mothernm',FatherName='$fathernm',Gender='$gender',DateOfBirth='$DOB',category_id=$category,Religion='$religion',email='$email',PhoneNumber='$phnno',PresentAddress='$pradd',PermanentAddress='$peradd'
    where StudentID=$StudentID
    ";

    $sql_del="delete from facilitystudentmaster where StudentID=$StudentID";
    $result_del=mysqli_query($conn,$sql_del);

    $result=mysqli_query($conn,$sqlqr);
    foreach($facilities as $f_id){
        $sql_in="insert into facilitystudentmaster(facilitystudentID,facilityid,StudentID) 
        values(NULL,$f_id,$StudentID)";
        $result_f=mysqli_query($conn,$sql_in);
    }
}
else if($action=='delete'){
    $sql_del="DELETE FROM `studentdeets`where StudentID=$StudentID";
    $result_del=mysqli_query($conn,$sql_del);
 }
// else if($action=='delete'){
//     $sql_del="update studentdeets
//     set Status='inactive'
//     where StudentID=$StudentID";
//     $result_del=mysqli_query($conn,$sql_del);
// }
if(mysqli_query($conn,$sql_del))
{
    header('location:showdata.php');
}

?>