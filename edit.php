<!DOCTYPE html>
<html lang="en">


<?php
       
  include("includes/dbconn.php");
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
            
                <!-- /.row -->
<?php 
$query = 'SELECT * FROM customer 
              WHERE
              cust_id ='.$_GET['id'];
            $result = mysqli_query($conn, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['cust_id'];
               
                $i= $row['firstname'];
                $a=$row['lastname'];
                $b=$row['email'];
                $c=$row['age'];
                $d=$row['height'];
                $e=$row['sex'];
             
              }
              
              $cust_id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Middle Name" name="Middlename" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="comment"><?php echo $e; ?></textarea>
                            </div>  
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

