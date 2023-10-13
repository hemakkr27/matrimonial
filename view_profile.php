
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>

<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);

	$fname= isset($row['firstname']) ? $row['firstname'] : "";
	$lname= isset($row['lname']) ? $row['lname'] : "";
	$sex= isset($row['sex']) ? $row['sex'] : "";
	$marital_status= isset($row['maritalstatus']) ? $row['maritalstatus'] : "";
	$dob= isset($row['dateofbirth']) ? $row['dateofbirth'] : "";
	$religion= isset($row['religion']) ? $row['religion'] : "";
	$caste= isset($row['caste']) ? $row['caste'] : "";
	$subcaste= isset($row['subcaste']) ? $row['subcaste'] : "";
	$country= isset($row['country']) ? $row['country'] : "";
	$state= isset($row['state']) ? $row['state'] : "";
	$district= isset($row['district']) ? $row['district'] : "";
	$age= isset($row['age']) ? $row['age'] : "";
	$maritalstatus= isset($row['maritalstatus']) ? $row['maritalstatus'] : "";
	$profileby= isset($row['profilecreatedby']) ? $row['profilecreatedby'] : "";
	$education= isset($row['education']) ? $row['education'] : "";
	$edudescr= isset($row['education_sub']) ? $row['education_sub'] : "";
	$bodytype= isset($row['body_type']) ? $row['body_type'] : "";
	$physicalstatus= isset($row['physical_status']) ? $row['physical_status'] : "";
	$drink= isset($row['drink']) ? $row['drink'] : "";
	$smoke= isset($row['smoke']) ? $row['smoke'] : "";
	$mothertounge= isset($row['mothertounge']) ? $row['mothertounge'] : "";
	$bloodgroup= isset($row['blood_group']) ? $row['blood_group'] : "";
	$weight= isset($row['weight']) ? $row['weight'] : "";
	$height= isset($row['height']) ? $row['height'] : "";
	$colour= isset($row['colour']) ? $row['colour'] : "";
	$diet= isset($row['diet']) ? $row['diet'] : "";
	$occupation= isset($row['occupation']) ? $row['occupation'] : "";
	$occupationdescr= isset($row['occupationdescr']) ? $row['occupationdescr'] : "";
	$fatheroccupation= isset($row['fathers_occupation']) ? $row['fathers_occupation'] : "";
	$motheroccupation= isset($row['mothers_occupation']) ? $row['mothers_occupation'] : "";
	$income= isset($row['annual_income']) ? $row['annual_income'] : "";
	
	$bros= isset($row['no_bro']) ? $row['no_bro'] : "";
	$sis= isset($row['no_sis']) ? $row['no_sis'] : "";
	$aboutme= isset($row['aboutme']) ? $row['aboutme'] : "";

//end of getting profile detils



	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
//getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$pic1=$row2['pic1'];
	$pic2=$row2['pic2'];
	$pic3=$row2['pic3'];
	$pic4=$row2['pic4'];
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | View_profile :: Make My Love
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
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
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
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $profileid;?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic1;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
						</li>
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic2;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
						</li>
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic3;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic3;?>" />
						</li>
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic4;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic4;?>" />
						</li>
					 </ul>
				  </div>
			</div>
			
			
		
			
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
						</tr><tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age . " Years"; ?>/<?php echo $height . " Cm";?> </td>
						</tr>
					  	<tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $marital_status;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Country :</td>
							<td class="day_value"><?php echo $country;?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created for :</td>
							<td class="day_value closed"><span><?php echo $profileby;?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $education;?></span></td>
						</tr>
				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About </a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>About Me.</h1>
				    	<p><?php echo $aboutme; ?></p>
				    </div>
				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $fname . " " .$lname; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $bodytype;?></td>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Age / Height :</td>
									<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $physicalstatus;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created for :</td>
									<td class="day_value closed"><span><?php echo $profileby;?></span></td>
								</tr>
								<!--<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><?php echo $drink;?></span></td>
								</tr>  -->
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        	<!--	<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age;?></td>
								</tr>  -->
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertounge;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $colour;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $weight;?> KG</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $bloodgroup;?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
								</tr>
							   <!-- <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php //echo $smoke;?></span></td>
								</tr>  -->
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $caste;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">
 Date of Birth :</td>
									<td class="day_value closed"><span><?php echo $dob;?></span></td>
								</tr>
							</tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $religion;?></td>
								</tr>
							   <!-- <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<td class="day_value"><?php //echo $subcaste;?></td>
								</tr> -->
							    
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value"><?php echo $education;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Education Detail :</td>
									<td class="day_value"><?php echo $edudescr;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span><?php echo $income;?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value"><?php echo $fatheroccupation;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><?php echo $motheroccupation;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $bros;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $sis;?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>

<?php
//getting partner prefernce
$sql = "SELECT * FROM partnerprefs WHERE custId = $id";
$result = mysqlexec($sql);
if($result){
$row= mysqli_fetch_assoc($result);

	$agemin= isset($row['agemin']) ? $row['agemin'] : "";
	$agemax= isset($row['agemax']) ? $row['agemax'] : "";
	$maritalstatus= isset($row['maritalstatus']) ? $row['maritalstatus'] : "";
	$complexion= isset($row['complexion']) ? $row['complexion'] : "";
	$height= isset($row['height']) ? $row['height'] : "";
	$diet= isset($row['diet']) ? $row['diet'] : "";
	$religion= isset($row['religion']) ? $row['religion'] : "";
	$caste= isset($row['caste']) ? $row['caste'] : "";
	$mothertounge= isset($row['mothertounge']) ? $row['mothertounge'] : "";
	$education= isset($row['education']) ? $row['education'] : "";
	$occupation= isset($row['occupation']) ? $row['occupation'] : "";
	$country= isset($row['country']) ? $row['country'] : "";
	$descr= isset($row['descr']) ? $row['descr'] : "";

/* 
$agemin=$row['agemin']; 
$agemax=$row['agemax'];
$maritalstatus=$row['maritalstatus'];
$complexion=$row['complexion'];
$height=$row['height'];
$diet=$row['diet'];
$religion=$row['religion'];
$caste=$row['caste'];
$mothertounge=$row['mothertounge'];
$education=$row['education'];
$occupation=$row['occupation'];
$country=$row['country'];
$descr=$row['descr'];
*/

}
?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value"><?php echo $agemin . " to " . $agemax;?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value closed"><span><?php echo $bodytype;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed"><span><?php echo $colour;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height;?> Cm</span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span><?php echo $religion;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed"><span><?php echo $caste;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed"><span><?php echo $mothertounge;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed"><span><?php echo $country;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">State :</td>
									<td class="day_value closed"><span><?php echo $state;?></span></td>
								</tr>
								
							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     <!-- 	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div> -->
    
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	