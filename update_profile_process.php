<?php
// Include your database connection code here
// Example: require_once("includes/dbconn.php");

if (isset($_POST['submit'])) {
    // Retrieve the updated profile attributes from the form
    $newFname = $_POST['fname'];
    $newLname = $_POST['lname'];
    $newSex = $_POST['sex'];
    $newMaritalStatus = $_POST['marital_status'];
    $newDob = $_POST['dob'];

    // Add similar code for other attributes

    // Use prepared statements to update the user's profile in the database
    $stmt = $conn->prepare("UPDATE customer SET firstname=?, lastname=?, sex=?, maritalstatus=?, dateofbirth=? WHERE cust_id=?");
    $stmt->bind_param("sssssi", $newFname, $newLname, $newSex, $newMaritalStatus, $newDob, $id);

    if ($stmt->execute()) {
        // Profile updated successfully
        header("location: profile.php"); // Redirect to the user's profile page
    } else {
        // Error handling
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}

// Close your database connection here if needed

?>
