
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Register :: Make My Love
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

<?php
$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
?>



      <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Las Name</th>
                                        <th>Email</th>
                                        <th>age</th>
                                       <th>sex</th>
                                        <th>Height</th>
										 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>


<?php
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="SELECT * FROM customer WHERE cust_id = $id";
//$result = mysqlexec($sql);
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){
	
/* 
	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$sex=$row['sex'];
	$email=$row['email'];
	$dob=$row['dateofbirth'];
	$religion=$row['religion'];
	$caste = $row['caste'];
	$subcaste=$row['subcaste'];
	$country = $row['country'];
	$state=$row['state'];
	$district=$row['district'];
	$age=$row['age'];
	$maritalstatus=$row['maritalstatus'];
	$profileby=$row['profilecreatedby'];
	$education=$row['education'];
	$edudescr=$row['education_sub'];
	$bodytype=$row['body_type'];
	$physicalstatus=$row['physical_status'];
	$drink=$row['drink'];
	$smoke=$row['smoke'];
	$mothertounge=$row['mothertounge'];
	$bloodgroup=$row['blood_group'];
	$weight=$row['weight'];
	$height=$row['height'];
	$colour=$row['colour'];
	$diet=$row['diet'];
	$occupation=$row['occupation'];
	$occupationdescr=$row['occupation_descr'];
	$fatheroccupation=$row['fathers_occupation'];
	$motheroccupation=$row['mothers_occupation'];
	$income=$row['annual_income'];
	$bros=$row['no_bro'];
	$sis=$row['no_sis'];
	$aboutme=$row['aboutme']; */


                  echo '<tr>';
                            echo '<td>'. $row['firstname'].'</td>';
                            echo '<td>'. $row['lastname'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
							 echo '<td>'. $row['age'].'</td>';                          
                            echo '<td>'. $row['sex'].'</td>';
							  echo '<td>'. $row['height'].'</td>';
                           
                            echo '<td><a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['cust_id'] . '"> EDIT </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                


 
</body>
</html>	