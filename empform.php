<!DOCTYPE html>
<html>
<?php
session_start();
include 'conn.php';
$student_id='';
if(isset($_GET['id']))
{
	print_r($_GET);
	$student_id=$_GET['id'];

	$student_fetch_query="select * from studentdeets where StudentID=$student_id";
	$student_facility="select * from facilitystudentmaster where StudentID=$student_id";
	$result_student=mysqli_query($conn,$student_fetch_query);
	$student_array=mysqli_fetch_array($result_student);

	$result_facility=mysqli_query($conn,$student_facility);

}
$sqlcat='select * from category_master';
$result=mysqli_query($conn,$sqlcat);
$sqlfac='select * from facilitiesmaster';
$resultfac=mysqli_query($conn,$sqlfac);
include 'formheader.php'
?>

	<div class="container" style="margin-top: 7rem;">
			<div class="row">
				<div class="col-sm-8 col-md-6 offset-sm-2 offset-md-3">
					<form class="register-form form-group" enctype="multipart/form-data" id="rform" method="post" style="border:5px solid black " action="<?php
					if(is_numeric($student_id)) echo "updatestudents.php";
					else echo "insertstudents.php";?>" name="rform">
						<h2 class="text-center" style="color: black; background-color: hsla(89, 43%, 51%, 0.3);  font-family:  serifs;">STUDENT REGISTRATION</h2>
						<hr>
						<?php
							if(is_numeric($student_id)) {
								echo '<input type=hidden name=student_id value='.$student_id.'>';
								echo '<input type=hidden name=actiontype value='.$_GET['action'].'>';
							}
						?>
						<div class="row">
							<div class="col-sm-2 col-form-label">
								<label>Photo:</label>
							</div>
							<div class="col-sm-10 input-container">
								<i class="fa fa-camera icon" style="padding: 15px;  background-color:black"></i>
								<input type="file" id="photo" name="photo" style="margin-top: .5rem;">
								<?php
								if (is_numeric($student_id))echo"<img class=img.thumbnail style='max-width:150px;'
								src=upload_image/".$student_array['Picture'].">";
								?>
							</div>
						</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>First Name:</label>
					 		</div>
					 		<div class="input-container col-sm-10">
					 		    <i class="fa fa-user icon" style =" background-color:black"></i>
					 		    <input class="input-field" type="text" placeholder="Your First name" name="1stnm" id="firstnm" required value="<?php
								if (is_numeric($student_id)) echo $student_array['FirstName'];
								?>">
					 		    <div class="text-danger" id="1stnmerr" style="color:red" ></div>
					 		  </div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Last Name:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your Last name" name="lastnm" id="lastnm" required value="<?php
								if (is_numeric($student_id)) echo $student_array['LastName'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Mother's Name:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your Mother's name" name="mothernm" id="mothernm" value="<?php
								if (is_numeric($student_id)) echo $student_array['MotherName'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Father's Name:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your Father's name" name="fathernm" id="fathernm" value="<?php
								if (is_numeric($student_id)) echo $student_array['FatherName'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Gender:</label>
					 		</div>
					 		<div class="col-sm-1 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 		</div>
					 		<div class="col-sm input-container form-group" style="margin-left: 11px;border: 1px solid; background-color: white;padding-left: 10px; padding-right: 10px; max-width: 71%; height: 56px;">
					 			<input type="radio" name="gender" <?php
								if (is_numeric($student_id) and $student_array['Gender']=='male' ) echo 'checked';
								else echo '';
								?> value="male" id="male">
					 			<p style="margin-top: 1rem; margin-left: 2px;">Male</p>
					 			<input type="radio" name="gender" <?php 
								if (is_numeric($student_id) and $student_array['Gender']=='female' ) echo 'checked';
								else echo '';
								 ?> value="female" style="margin-left: 10px;" id="female">
					 			<p style="margin-top: 1rem; margin-left: 2px">Female</p>
					 			<input type="radio" name="gender" <?php
								if (is_numeric($student_id) and $student_array['Gender']=='others' ) echo 'checked';
								else echo '';
								?> value="others" style="margin-left: 10px;" id="others">
					 			<p style="margin-top: 1rem; margin-left: 2px">Others</p>
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Date Of Birth:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-calendar icon"style =" background-color:black"></i>
					 			<input class="input-field" type="date" placeholder="dd-mm-yyyy" name="DOB" id="DOB" required value="<?php
								if (is_numeric($student_id)) echo $student_array['DateOfBirth'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Category:</label>
					 		</div>
					 		<div class="col-sm-1 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 		</div>
					 		<div class="col-sm input-container" style="display:inline-block;margin-left: 11px;border: 1px solid; background-color: white;padding-left: 10px; padding-right: 10px; max-width: 71%; height: 56px;">
					 			<?php
					 				while($fetched_data=mysqli_fetch_array($result)) {
										if(is_numeric($student_id)){
											if($fetched_data['category_id']==$student_array['category_id'])
												$cat_selec='checked';
											else
												$cat_selec='';
										}
										else
												$cat_selec='';
										?>
					 					<label style="margin-top: 1rem; margin-left: 2px;">
					 						<input type="radio" name="category" <?php echo $cat_selec; ?> value="<?php echo $fetched_data['category_id']?>">
					 						<?php echo $fetched_data['category_name']?>
					 					</label>
					 			<?php
					 				}
					 			?>
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Religion:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-user icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your Religion" name="religion" id="religion" value="<?php
								if (is_numeric($student_id)) echo $student_array['Religion'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Email:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-envelope icon"style =" background-color:black"></i>
					 			<input class="input-field" type="email" placeholder="Your email address" name="email" id="email" required value="<?php
								if (is_numeric($student_id)) echo $student_array['email'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Phone Number:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-phone icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your phone number" name="phnno" id="phnno" value="<?php
								if (is_numeric($student_id)) echo $student_array['PhoneNumber'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Present Address:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-home icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your present address" name="pradd" id="pradd" value="<?php
								if (is_numeric($student_id)) echo $student_array['PresentAddress'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Permanent Address:</label>
					 		</div>
					 		<div class="col-sm-10 input-container">
					 			<i class="fa fa-home icon"style =" background-color:black"></i>
					 			<input class="input-field" type="text" placeholder="Your permanent address" name="peradd" id="peradd" value="<?php
								if (is_numeric($student_id)) echo $student_array['PermanentAddress'];
								?>">
					 		</div>
					 	</div>
					 	<div class="row form-group">
					 		<div class="col-sm-2 col-form-label">
					 			<label>Facilities:</label>
					 		</div>
					 		<div class="col-sm-1 input-container">
					 			<i class="fa icon"style =" background-color:black"></i>
					 		</div>
					 		<div class="col-sm input-container" style="display:inline-block; margin-left: 11.7px;border: 1px solid; background-color: white;padding-left: 10px; padding-right: 10px; max-width: 71%; max-height: 100%;">
							 <?php  $fac_select='';
					 				while($fetched_fac=mysqli_fetch_array($resultfac)) {
										if(is_numeric($student_id)){
											mysqli_data_seek($result_facility,0);
											while($facility_array=mysqli_fetch_array($result_facility)){
												if($fetched_fac['facilityid']==$facility_array['facilityid']){
													$fac_select='checked';
													
													break;
												} else {
													$fac_select='';
												}													
											}
										}
										else {
											$fac_select='';
										}
									?>
									
					 					<label style="margin-top: 1rem; margin-left: 2px; margin-right: 5px;">
					 						<input type="checkbox" name="facilities[]" id="facilities" <?php echo $fac_select; ?> value="<?php echo $fetched_fac['facilityid']?>">
					 						<?php echo $fetched_fac['facilityname'];
											
											?>
					 					</label>
					 			<?php
					 				}
					 			?>
					 		</div>
					 	</div>
					 	<div class="text-center mb-1 .btn-danger">
					 	     <button type="submit" class="btn btn-primary butn" id="submitbtn">Submit</button>
								</div>
					</form>
				</div>
			</div>
		</div>
</body>

</html>