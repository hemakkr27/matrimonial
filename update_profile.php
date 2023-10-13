<?php
// Include your PHP files and start the session here if needed
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_SESSION['cust_id'];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $sex = $_POST["sex"];
    $marital_status = $_POST["marital_status"];
    $dob = $_POST["dob"];

    // Perform the database update
    $sql = "UPDATE customer SET firstname=?, lastname=?, sex=?, maritalstatus=?, dateofbirth=? WHERE cust_id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssi", $fname, $lname, $sex, $marital_status, $dob, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Update successful
            echo "Profile updated successfully.";
        } else {
            // Update failed
            echo "Error updating profile: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in prepared statement: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    // Redirect to the update profile page if the form is not submitted
    header("Location: update_profile.php");
    exit;
}
?>



<!DOCTYPE HTML>
<html>

<head>
    <title>Update Your Profile - Make My Love</title>
    <!-- Add your CSS and JavaScript dependencies here -->
    <!-- Example: -->
    <!-- <link rel="stylesheet" href="css/update_profile.css" type="text/css"> -->
    <!-- <script src="js/update_profile.js"></script> -->
</head>

<body>
    <h2>Update Your Profile</h2>
    <form method="post" action="update_profile_process.php">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>"><br><br>

        <label for="sex">Sex:</label>
        <input type="text" id="sex" name="sex" value="<?php echo $sex; ?>"><br><br>

        <label for="marital_status">Marital Status:</label>
        <input type="text" id="marital_status" name="marital_status" value="<?php echo $marital_status; ?>"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>"><br><br>

        <!-- Include additional input fields for other profile attributes here -->

        <input type="submit" name="submit" value="Update Profile">
    </form>
</body>

</html>