<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Register :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 

			

<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".mydropcls").hover(            
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
<div class="grid_3" style="background-color: #cbf3f3;">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Create Your id</li>
     </ul>
   </div>
   
   
   			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>
.myDiv{
	display:none;
}  
#showOne{
	color:red;
    border:1px solid red;
    padding:10px;
}
#showTwo{
	color:green;
    border:1px solid green;
    padding:10px;
}
#showThree{
	color:blue;
    border:1px solid blue;
    padding:10px;
}
</style>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>

  

 <div class="form-group col-sm-6">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>

				<div class="select-block1">
				<input type="radio" name="demo" value="One"/> Male
<input type="radio" name="demo" value="Two"/> Female

<div id="showOne" class="myDiv">
	
	<form id="MyForm" action="" method="post">
	
	
	 <div class="form-group ">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
					<option value="<?php if($marital_status="Never Married"){echo "Never Married";} elseif ($marital_status="Widower") {echo "Widower";} else{echo "Divorsed";}?>"><?php echo $Divorsed;?></option>

	                    <option value="Never Married">Never Married</option>
	                    <option value="Widower">Widower</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
  		
	</form>
</div>
<div id="showTwo" class="myDiv">

	<form id="MyForm" action="" method="post">
  	 <div class="form-group ">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
					<option value="<?php if($marital_status="Never Married"){echo "Never Married";} elseif ($marital_status="Widower") {echo "Widower";} else{echo "Divorsed";}?>"><?php echo $Divorsed;?></option>
	                    <option value="Never Married">Never Married</option>
	                    <option value="Widow">Widow</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
	</form>
</div>

				
	              
			    </div>
		    </div>

   
   
   
      <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="lname" size="60" maxlength="128" class="form-text required">
		    </div>
		 <!--    <div class="form-group col-sm-2">
		      <label for="edit-name">Sex <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	               
	                </select>
			    </div>
		    </div>  -->
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">
 Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day">
		                    <option value=""></option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month">
		                    <option value="">Month</option>
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year">
		                    <option value="">Year</option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Gotras <span class="form-required" title="This field is required.">*</span></label>
			       <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
					 <!-- <label for="caste_category">Cast Select:</label>  -->
					   <select id="caste_category" name="caste_category">
            <option value="none">Select a category</option>
            <option value="Aggarwal">Aggarwal</option>
            <option value="Other">Other</option>
        </select>
					  
	                    
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
					 <!--    <label for="cast_name">cast name option:</label> -->
        <select id="cast_name" name="cast_name">
            <option value="none">Select a cast</option>
        </select>
					   
	              <!--        <select name="caste">
						<option value="Not Applicable"></option>
<option value="Bansal"> Bansal</option>
<option value="Bindal or Vindal"> Bindal or Vindal </option>
<option value="Bhandal"> Bhandal </option>
<option value="Dharan or Deran"> Dharan or Deran </option>
<option value="Garg or Gargeya"> Garg or Gargeya </option>
<option value="Goyal, Goel or Goenka"> Goyal, Goel or Goenka </option>
<option value="Goyan, Gangal"> Goyan, Gangal </option>
<option value="Jindal"> Jindal </option>
<option value="Kansal"> Kansal </option>
<option value="Kuchhal, Kuchchal"> Kuchhal, Kuchchal </option>
<option value="Madhukul/Mudgal"> Madhukul/Mudgal </option>
<option value="Mangal"> Mangal </option>
<option value="Mittal"> Mittal </option>
<option value="Nangal/Nagal">Nangal/Nagal</option>
<option value="Singhal/Singla">Singhal/Singla</option>
<option value="Tayal">Tayal</option>
<option value="Tingal/Tunghal">Tingal/Tunghal</option>




	                    </select>  -->
	                  </div>
	                 </div>
	             
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
 <script>
        // JavaScript to populate the second select field based on the first select's value
        document.getElementById("caste_category").addEventListener("change", function () {
            var category = this.value;
            var fruitNameSelect = document.getElementById("cast_name");

            // Clear existing options
            fruitNameSelect.innerHTML = '<option value="none">Select cast </option>';

            // Add options based on the selected category
            if (category === "Aggarwal") {
                var casstes = ["Bansal", "Bindal or Vindal", "Bhandal", "Dharan or Deran", "Garg or Gargeya", 
				"Goyal, Goel or Goenka", "Goyan, Gangal", "Jindal", "Kansal", "Kuchhal, Kuchchal", 
				"Madhukul/Mudgal", "Mangal", "Mittal", "Nangal/Nagal", "Singhal/Singla", "Tayal", "Tingal/Tunghal"];
                for (var i = 0; i < casstes.length; i++) {
                    var option = document.createElement("option");
                    option.value = casstes[i];
                    option.text = casstes[i];
                    fruitNameSelect.appendChild(option);
                }
            } else if (category === "Other") {
                var casstes = ["Other", "A", "B"];
                for (var i = 0; i < casstes.length; i++) {
                    var option = document.createElement("option");
                    option.value = casstes[i];
                    option.text = casstes[i];
                    fruitNameSelect.appendChild(option);
                }
            }
        });
    </script>
            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country">
		                    <option value="Not Applicable">Country</option>
		                    <option value="India">India</option>
		                
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="state">
		                    <option value="">State</option>
		                    <option value="Harayana">Harayana</option>
		           
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="district">
		                    <option value="">District</option>
		                    <option value="Ambala">Ambala</option>
		                    <option value="Bhiwani">Bhiwani</option>
		                    <option value="Charkhi Dadri">Charkhi Dadri</option>
		                    <option value="Faridabad">Faridabad</option>
		                    <option value="Kurukshetra">Kurukshetra</option>
		                    <option value="Kaithal">Kaithal</option>
		                    <option value="Karnal">Karnal</option>
		                    <option value="Fatehabad">Fatehabad</option>
		                    <option value="Gurugram">Gurugram</option>
		                    <option value="Hisar">Hisar</option>
		                    <option value="Jhajjar">Jhajjar</option>
		                    <option value="Jind">Jind</option>
		                    <option value="Mahendragarh">Mahendragarh</option>
		                    <option value="Nuh">Nuh</option>
		                    <option value="Palwal">Palwal</option>
		                    <option value="Panchkula">Panchkula</option>
		                    <option value="Panipat">Panipat</option>
		                    <option value="Rewari">Rewari</option>
		                    <option value="Rohtak">Rohtak</option>
		                    <option value="Sirsa">Sirsa</option>
		                    <option value="Sonipat">Sonipat</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
          <!--  <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age">
	                     <option value="">
</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                </select>
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div> -->
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created for <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="profileby">
	                    <option value="Self">Self</option>
	                    <option value="Son/Daughter">Son/Daughter</option> 
	               		<option value="Other">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education">
	                    <option value="Primary">Primary</option>
	                    <option value="Tenth level">Tenth level</option> 
	               		<option value="+2">+2</option> 
	               		<option value="Degree">Degree</option> 
	               		<option value="PG">PG</option> 
	               		<option value="Doctorate">Doctorate</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="edudescr" value="" size="60" maxlength="60" class="form-text">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bodytype">
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option> 
	               		<option value="Average">Average</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="physicalstatus">
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option> 
	               		<option value="Deaf">Deaf</option> 
	                </select>
			    </div>
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
          <!--  <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option> 
	                </select>
			    </div> 
		    </div>  -->
			
		   <!-- <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option>
	                </select>
			    </div>
		    </div>-->
		      <div class="col-lg-12">
			<div class="row">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge">
					
	                   <!--  <option value="Malayalam">Malayalam</option> -->
	                    <option value="Hindi">Hindi</option> 
	               		<option value="English">English</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Blood Group<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bloodgroup">
	                    <option value="A +ve">A +ve</option>
	                    <option value="O +ve">O +ve</option>
						<option value="B +ve">B +ve</option>
					    <option value="AB +ve">AB +ve</option>
	                    <option value="A -ve">A -ve</option>  
	                    <option value="O -ve">O -ve</option>    
	                    <option value="B -ve">B -ve</option> 
                        <option value="AB -ve">AB -ve</option> 

	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			
			  <input type="number" id="edit-name" name="weight" value="" min="2" max="3" class="form-text">
		    </div>
			<div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>	
			   	<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
			    </div>
		    </div>
			  <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet">
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>
		    </div>
		    </div>
		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		    <div class="col-lg-12">
			<div class="row">
		  <!--  <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div> -->
		  <!-- 	<div class="form-group col-sm-2">
		      <label for="edit-name">Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet">
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>  -->
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  	    <div class="select-block1">
	                <select name="colour">
	                    <option value="IT Software">IT Software</option>
	                    <option value="Teacher">Teacher</option> 
	               		<option value="CA Accountant">CA Accountant</option> 
	               		<option value="Businessman">Businessman</option> 
	               		<option value="Doctors Nurse">Doctors Nurse</option> 
	               		<option value="Govt. Services">Govt. Services</option> 
	               		<option value="Lawyers">Lawyers</option> 
	               		<option value="Defence">Defence</option> 
	               		<option value="IAS">IAS</option> 
	               		<option value="Cyber Network Security">Cyber Network Security</option> 
	               		<option value="Engineers">Engineers</option> 
	               		<option value="Hotels Hospitality Professional">Hotels Hospitality Professional</option> 
	               		<option value="NGO Social Services">NGO Social Services</option> 
	               		<option value="Nurse">Nurse</option> 
	               		<option value="Police">Police</option> 
	               	
	                </select>
			    </div>
			  
			  <!--<input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">  -->
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation Descr <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="120" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text">
		    </div>
		   
		 </div>  
		    
</div>


             <!-- Seventh Row ends-->
  
           <!-- eighth Row starts-->
           <div class="col-lg-12">
		   <div class="row">
            <div class="form-group col-sm-3">
		    		<label for="edit-name">Fathers Occupation <span class="form-required" title="This field is required."></span></label>
			  	<!--	<input type="text" id="edit-name" name="fatheroccupation" value="" size="60" maxlength="500" class="form-text">  -->
		   
		     <div class="select-block1">
	                <select name="colour">
	                    <option value="IT Software">IT Software</option>
	                    <option value="Teacher">Teacher</option> 
	               		<option value="CA Accountant">CA Accountant</option> 
	               		<option value="Businessman">Businessman</option> 
	               		<option value="Doctors Nurse">Doctors Nurse</option> 
	               		<option value="Govt. Services">Govt. Services</option> 
	               		<option value="Lawyers">Lawyers</option> 
	               		<option value="Defence">Defence</option> 
	               		<option value="IAS">IAS</option> 
	               		<option value="Cyber Network Security">Cyber Network Security</option> 
	               		<option value="Engineers">Engineers</option> 
	               		<option value="Hotels Hospitality Professional">Hotels Hospitality Professional</option> 
	               		<option value="NGO Social Services">NGO Social Services</option> 
	               		<option value="Nurse">Nurse</option> 
	               		<option value="Police">Police</option> 
	               	
	                </select>
			    </div>
		   </div>
           <div class="form-group col-sm-3">
		      <label for="edit-name">Mothers Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="motheroccupation" value="" size="60" maxlength="500" class="form-text">
		    </div>
		    
          <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of sisters<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sis">
					 <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
			    </div>
		    </div>
			
		    <div class="form-group col-sm-3">
		      <label for="edit-name">No . Of brothers<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bros">
					    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option> 
	                    <option value="3">3</option> 
	                    <option value="4">4</option> 
	                    <option value="5">5</option> 	
	                </select>
			    </div>
		    </div>
			  <div class="form-group col-sm-6">
		      <label for="edit-marr">Married/Unmarried Sis/Bro<span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-marr" name="Sisters/Bother" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    </div>
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
			  </div>
			  
             <!-- eighth Row ends-->
         <hr/>
			  

		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  
 
 
 

 </div>
</div>




</body>
</html>	