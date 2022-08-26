<!DOCTYPE html>
<html>
    <?php
	session_start();
	include 'header.php';
    ?>
	<section class="section-block hero-carousel" style="margin-top: 150px;margin-right: 20px;" data-title="Building technology for human progress">
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-md-6 ">
	        <div class="row">
	          <div class="col-md-9 offset-md-2">
	            <h1 class="buildtext"><u>Building technology for human <br><br>progress</u></h1>
	            <br>
	            <p style="text-align: justify;font-size: 20px;">We are a group of industries that aim at advancing Earth's technical horizon. Our CEO and chief inventor Anthony Edward Stark has spent decades on our company's goals. He has held various conferences and did a lot of events to include the rest of the world in our venture.</p>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-6 pr-md-0 ">
	        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	          <div class="carousel-inner">
	                <div class="carousel-item">
	                    <img class="d-block w-100" src="tony1.png" alt="First slide">
	                </div>
	                <div class="carousel-item">
	                      <img class="d-block w-100" src="tony2.png" alt="Second slide">
	                </div>
	                <div class="carousel-item active">
	                      <img class="d-block w-100" src="Stark_Industries.png" alt="Third slide">
	                      <div class="carousel-caption d-none d-md-block">
	                          <h5 style="color: red;-webkit-text-stroke-color: yellow; -webkit-text-stroke-width: .1px;">Our Headquarters</h5>
	                      </div>
	                </div>
	           </div>
	            <ol class="carousel-indicators">
	                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
	                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
	           	</ol>
	        </div>
	      </div>
	   	 </div>
	  </div>
	</section>
	<div class="row">
		<div class="card col" style="width: 18rem;">
			  <img src="card1.jpg" class="card-img-top" alt="like" width="25" height="300">
			  <div class="card-body">
			    <h5 class="card-title">Upcoming Technologies</h5>
			    <p class="card-text">We have a lot of upcoming technologies and we're very excited for it!!</p>
			    <a href="#" class="btn btn-primary" style="border-color: #FCCD12; background-color: #b30e16;">Check it out!</a>
			  </div>
			</div>
			<div class="card col" style="width: 18rem;">
			  <img src="card2.jpg" class="card-img-top" alt="comment" width="25" height="300">
			  <div class="card-body">
			    <h5 class="card-title">Future Scholarships</h5>
			    <p class="card-text">To keep track of all the scholarships we'll give out in the future, subscribe to our newsletter!</p>
			    <a href="#" class="btn btn-primary" style="border-color: #FCCD12; background-color: #b30e16;">Subscribe</a>
			  </div>
			</div>
			<div class="card col" style="width: 18rem;">
			  <img src="card3.jpg" class="card-img-top" alt="contact" width="300" height="300">
			  <div class="card-body">
			    <h5 class="card-title">Partner Companies</h5>
			    <p class="card-text">We're lucky to be partnered with such great companies. Click below to know all about them</p>
			    <a href="#" class="btn btn-primary" style="border-color: #FCCD12; background-color: #b30e16;">Check 'em out!</a>
			  </div>
			</div>
	</div>
</body>
<?php
include 'footerhtml.php';
?>