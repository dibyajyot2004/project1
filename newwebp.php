<!DOCTYPE html>
<html>
	session_start();
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="C:\xampp\htdocs\internphp\style3.css">-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="foot.css">
	<link rel="stylesheet" href="stark.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
		$('#fac').hide();
		$('#cat').hide();
		$('#logout').hide();
	</script>
	<title>STARK Industries</title>
	<?php
	if($_SESSION['loggedin']){
		 echo "<script>alert('Welcome .$username.' !!')</script>";
		 echo "<script>$('#login').hide();</script>";
		 echo "<script>$('#logout').show();</script>";
		 echo "<script>$('#fac').show();</script>";
		 echo "<script>$('#cat').show();</script>";
	}
	?>
	<nav class="navbar navbar-expand-sm navbar-dark navstyle fixed-top" id="rcorners2">
		<a class="navbar-brand" href="#">
		    <img src="jarvis2.png" width="50" height="50" class="d-inline-block align-top" alt="">
		 </a>
		 <h3 class="page"><u>STARK INDUSTRIES</u></h3>
		 <div class="container" style="width:75%;padding-left: auto;">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link menu" href="newwebp.html" style="margin-left: 1rem;" target="_blank">HOME <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link menu" href="#">ABOUT US</a>
				  </li>
				  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  EMPLOYEES
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Upcoming Interviews</a>
					  <a class="dropdown-item" href="#">Apply to us</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Show applied candidates</a>
					</div>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link menu" href="login.html" id='login'>ADMIN LOG-IN</a>
				  </li>
				  <li class="nav-item active" >
					<a class="nav-link menu" href="#" id="logout">LOG OUT</a>
				  </li>
				<li class="nav-item active">
					<a class="nav-link menu" href="#" id="fac">ADD FACILITY</a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link menu" href="#" id="cat">ADD CATEGORY</a>
				  </li>
				</ul>
		   </div>  
	   </div>
		   <form class="form-inline my-2 my-lg-0" style="width:30%">
			 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			 <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="font-family: Marvel;">SEARCH</button>
		   </form>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			  <span class="navbar-toggler-icon"></span>
		  </button>
	</nav>
</head>
<body style="background-color: #FCCD12;">
	<section class="section-block hero-carousel" style="margin-top: 20px;margin-right: 20px;" data-title="Building technology for human progress">
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
	<!--<div class="card-group">
		<div class="card" style="width: 18rem;">
			  <img src="C:\Users\MYHP\Downloads\like-icon-png-4184.png" class="card-img-top" alt="like" width="100" height="200">
			  <div class="card-body">
			    <h5 class="card-title">Like</h5>
			    <p class="card-text">Do like our content!!</p>
			    <a href="#" class="btn btn-primary">More</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <img src="C:\Users\MYHP\Downloads\comment-png-22707.png" class="card-img-top" alt="comment" width="100" height="200">
			  <div class="card-body">
			    <h5 class="card-title">Comment</h5>
			    <p class="card-text">Do comment on our site!!</p>
			    <a href="#" class="btn btn-primary">Comment</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <img src="C:\Users\MYHP\Downloads\phone-icon-925.png" class="card-img-top" alt="contact" width="100" height="200">
			  <div class="card-body">
			    <h5 class="card-title">Contact Us</h5>
			    <p class="card-text">If you have any queries please contact us!!</p>
			    <a href="#" class="btn btn-primary">Info</a>
			  </div>
			</div>
	</div>-->
</body>
<footer>
	<section id="footer">  
	<div class="container">  
	<div class="row text-center text-xs-center text-sm-left text-md-left">  
	<div class="col-xs-12 col-sm-4 col-md-4">  
	<h5> Quick links </h5>  
	  <ul class="list-unstyled quick-links">  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Get Started </a> </li>  
	              <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Videos </a> </li>  
	</ul>  
	</div>  
	          <div class="col-xs-12 col-sm-4 col-md-4">  
	    <h5> Quick links </h5>  
	    <ul class="list-unstyled quick-links">  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Our Services </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Expert Team </a> </li>  
	    </ul>  
	    </div>  
	    <!--<div class="col-xs-12 col-sm-4 col-md-4">  
	    <h5> Quick links </h5>  
	             <ul class="list-unstyled quick-links">  
	     <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Home </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> About </a></li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> FAQ </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Get Started </a> </li>  
	    <li> <a href="#"> <i class="fa fa-angle-double-right"> </i> Contact </a> </li>  
	    </ul>  
	    </div>-->  
	    </div>
	    <div class="row">  
	    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">  
	    <ul class="list-unstyled list-inline social text-center">  
	    <li class="list-inline-item"> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>  
	             <li class="list-inline-item"> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>  
	    <li class="list-inline-item"> <a href="#"> <i class="fa fa-instagram"> </i> </a> </li>  
	    <li class="list-inline-item"> <a href="#"> <i class="fa fa-google-plus"> </i > </a> </li>  
	    <li class="list-inline-item"> <a href="#"> <i class="fa fa-envelope"> </i> </a> </li>  
	    </ul>  
	    </div>  
	    <hr>  
	    </div>      
	    <div class="row">  
	    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">  
	   <p class="h6"> 2021 ? All right Reversed. <a class="text-green ml-2" href="#" target="_blank">Stark Industries</a> </p>  
	    </div>  
	    <hr>  
	    </div>      
	    </div>  
	    </section>
</footer>
</html>