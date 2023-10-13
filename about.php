<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | About :: Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">About</li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/wed1.jpg" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1>About us</h1>
		<br>
   	<!--  	<h3 class="">Categories</h3>
	<span class="">Community organisation <br></span>
    	<br -->
    			<h3 class="">Contact info</h3>
    			<ul class="textcls">
				  <li><i class="fa fa-home mycolred"></i>
				  <p>Sector 7 Kurukshetra, Haryana</p>
				<!--  <p>Address</p> -->
				  </li>
				  	  <li><i class="fa fa-phone mycolred"></i>
				  <p>098123 21981</p>
				  <!--<p>Mobile</p>-->
				  </li>	  <li><i class="fa fa-envelope mycolred" aria-hidden="true"></i>

				  <p><a href="https://www.facebook.com/vaishyavaibhav/about">vaishyavaibhav1@gmail.com</a></p>
				 <!-- <p>Email</p>-->
				  </li>
				  	
				  
			    </ul>
    			<br>
    			<h3 class="">Websites and social links</h3>
	  <ul class="textcls">
				  <li><i class="fa fa-chain-broken mycolred" aria-hidden="true"></i></i>
				  <p>http://www.vaishyavaibhav2010.com/</p>
			
				   <!-- <p>Website</p>-->
				  </li>
				  	
				  
			    </ul>
	  
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>



	