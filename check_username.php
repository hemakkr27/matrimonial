
<?php
// Database connection parameters
require_once("includes/dbconn.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Check if the username already exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<span style='color: red;'>Username already exists. Please choose a different username.</span>";
    } else {
        echo "<span style='color: green;'>Username is available.</span>";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
