<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Validate the email address (you can add more robust validation)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
    } else {
        // Generate a random token for password reset (you may use a library for better token generation)
        $resetToken = bin2hex(random_bytes(32));

        // Store the reset token and associate it with the user's email in your database
        // This could involve updating a 'reset_token' field in your users table

        // Send an email with a link to reset the password
        $resetLink = "https://example.com/reset_password.php?token=$resetToken";
        $subject = "Password Reset";
        $message = "To reset your password, click the link below:\n\n$resetLink";
        $headers = "From: webmaster@example.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "Password reset link sent to your email address.";
        } else {
            echo "Error sending the password reset link. Please try again later.";
        }
    }
}
?>
reset_password.php:

php
Copy code
<?php
// Verify the token from the URL against the database to ensure it's valid
if (isset($_GET['token'])) {
    $resetToken = $_GET['token'];

    // Check the database for the reset token and get the associated email
    // If the token is valid, allow the user to reset their password
    // If not, display an error message
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form method="post" action="reset_password_process.php">
        <input type="hidden" name="token" value="<?php echo $resetToken; ?>">
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <input type="submit" name="submit" value="Reset Password">
    </form>
</body>
</html>
reset_password_process.php (This is where you should handle updating the password in the database):

php
Copy code
<?php
if (isset($_POST['submit'])) {
    $token = $_POST['token'];
    $newPassword = $_POST['password'];

    // Verify the token against the database to ensure it's valid
    // Update the user's password with the new one in the database

    // After a successful reset, you may want to delete or invalidate the reset token

    echo "Password reset successfully.";
}
?>
Now, the code structure is more organized, and it separates the steps of sending the reset email and updating the password in the database. Be sure to implement the database interaction logic in the reset_password_process.php file to actually update the user's password.





