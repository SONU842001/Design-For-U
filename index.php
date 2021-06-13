<?php  include "includes/db.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--magnific popup css link -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Design for u</title>
</head>
<body>
	<header class="header fixed-top">
		<a href="#" class="logo"><img src ="./images/logo.jpeg" alt=""></a>
		<nav>
			<ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#service">service</a></li>
            <li><a href="#project">project</a></li>
            <li><a href="#contact">contact</a></li>
            <?php
            if($_SESSION['user_id']){
                echo"<li><a href='./includes/logout.php'>logout</a></li>";   
            }else{
                echo "<li><a href='login.php'>login/Signup</a></li>";
            }
            ?>
			
			</ul>
		</nav>
		<div class="fas fa-bars"></div>
	</header>
	<!--header section ends -->
	<!--home section start -->
<section id="home"class="home container-fluid p-0">
<img src="./images/img1.jpeg" width="100%" height="10%"alt="">

	<div class="row hero">
		<div class="col pl-5 ml-sm-5 p-0">
			<h1 class="text1">interior Design</h1>
			<h3 class="text2">Archetecture servies</h3>
        
       </div>
	</div>
	<div class="counting">
		<div class="box">
			<h1 class="count" data-count="1200">1200+</h1>
			<h3>working hours</h3>
		</div>
		<div class="box">
			<h1 class="count" data-count="15">15+</h1>
			<h3>awards</h3>
		</div>
		<div class="box">
			<h1 class="count" data-count="1000">1000+</h1>
			<h3>clients</h3>
		</div>
		<div class="box">
			<h1 class="count" data-count="800">800+</h1>
			<h3>projects</h3>
		</div>
	</div>
</section>

   <!--home section end -->
    <!--about section start-->
    <section id="about" class="about conatainer">
    	<h1 class="heading">about us</h1>
    	<div class="row align-items-center">
    		<div class="col-md-6 image">
    			<img src="./images/about-image.jpeg" width="90%" alt="">
    			</div>
    			<div class="col-md-6 info">
    				<h2>the best interior design in the city</h2>
    				<p>this is the best interior design in the city where you can get all the facility within
    				twenty four hour we provide best facility to our customer and it become helpful for him</p>
    				<p>this is the best interior design in the city where you can get all the facility within
    				twent four hour we provide best facility to our customer and it become helpful for him and
    			     our cilient will become very happy after geting srivice from us and it really very good and 
    			 we are reakky proud on our service and all the project i done it will very saetisfactory </p>
    			 <div class="icons">
    			 	<a href="#" class="fab fa-facebook-f"></a>
    			 	<a href="#" class="fab fa-twitter"></a>
    			 	<a href="#" class="fab fa-instagram"></a>
    			 </div>
    			</div>
    	</div>
    </section>
     <!--about section ends-->

<!--sevice section start-->
<section id="service" class="service">
	<h1 class="heading">our services</h1>
<div class="box-container mx-auto">
	<div class="box">
		<div class="fas fa-pallete"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	<div class="box">
		<div class="fas fa-tools"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	<div class="box">
		<div class="fas fa-house-user"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	<div class="box">
		<div class="fas fa-couch"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	<div class="box">
		<div class="fas fa-bed"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	<div class="box">
		<div class="fas fa-bath"></div>
		<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here </p>
	</div>
	
</div>
</section>
<!--sevice section ends-->

<!--project section start-->
<section id="project" class="project">
	<div class="heading">our projects</div>
	<div class="box-container mx-auto">
<div class="box">
	<a href="http://www.planyourroom.com" title="house">
		<img src="./images/img1.jpeg" alt="">
	</a>
</div>
<div class="box">
	<a href="https://www.dormify.com/collections/rooms" title="hall">
		<img src="./images/img2.jpeg" alt="">
	</a>
</div>
<div class="box">
	<a href="./images/img3.jpeg" title="pool">
		<img src="./images/img3.jpeg" alt="">
	</a>
</div>
<div class="box">
	<a href="./images/img4.jpeg" title="kitchen">
		<img src="./images/img4.jpeg" alt="">
	</a>
</div>
<div class="box">
	<a href="./images/img5.jpeg" title="bath">
		<img src="./images/img5.jpeg" alt="">
	</a>
</div>
<div class="box">
	<a href="./images/img6.jpeg" title="toilet">
		<img src="./images/img6.jpeg" alt="">
	</a>
</div>
</div>
</section>

<!--project section end-->
<!--contact section starts-->
<section id="contact" class="contact">
	 <h1 class="heading">contact us</h1>
    <div class="contact-box-container mx-auto">
    	<div class="contact-box">
    		<i class="fas fa-map-marker-alt"></i>
    		<h3>Kochi, india - 400104 </h3>
    	</div>
    	<div class="contact-box">
    		<i class="fas fa-envelope"></i>
    		<h3>xyz@gmail.com</h3>
    	</div>
    	<div class="contact-box">
    		<i class="fas fa-phone"></i>
    		<h3>+917079741783</h3>
    	</div>
    	<div class="form-container mx-auto">
    	<form action="">
    		<div class="inputBox">
    			<input type="text" placeholder="first name">
    			<input type="text" placeholder="last name">
    		</div>
    		<input type="email" placeholder="e-mail">
    		<textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
    		<input type="submit" value="send">
    	</form>
    </div>
</section>
<!--contact secion ends-->

<!--footer section starts-->
<section class="footer" class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<p>our service is best in this area but i want to popular our service globally so any one who want to get best service 
		can contact us all the information of our work is given here</p>
		</div>
		<div class="col-md-3">
			<h2>our location </h2>
			<div class="list">
				<a href="#">India</a>
				<a href="#">France</a>
				<a href="#">Usa</a>
				<a href="#">Japan</a>
			</div>
		</div>
		<div class="col-md-3">
			<h2> follow us </h2>
			<div class="list">
				<a href="#">facebook</a>
				<a href="#">twitter</a>
				<a href="#">instagram</a>
			</div>
		</div>
		<div class="col-md-3 text-center text-md-left letter">
			<h2>newsletter</h2>
			<p>Subscribe for latest update</p>
			<input type = "email" placeholder="enter your mail">
			<input type = "submit" placeholder="Subscribe">
		</div>
    
	</div>
	<h1 class="credit">created by <span>kumar sonu </span> | all rights reserved</h1>
</section>
<!--footer section ends-->
	<!--jquery file link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--magnific popup link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<!--main/custom javascript file link-->
	<script src="main.js"></script>
</body>
</html>
