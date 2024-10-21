<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Query to get user by name
    $sql = "SELECT * FROM userlogin WHERE name='$name'";
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $user = mysqli_fetch_assoc($result);

        // Debugging: Check stored hash
        echo "Stored hash: " . $user['password'] . "<br>";

        // Verify the password
        if (password_verify($password, $user['password'])) {
            echo "Password match"; // Just to debug
            // Store user info in session
            $_SESSION['name'] = $user['name'];
            header('Location: welcome.php');  // Redirect to a welcome page
            exit();
        } else {
            echo "Password mismatch"; // Debugging
        }
    } else {
        echo "User not found.";
    }
}
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Login</button><br>
    <button><a href="signup.php">register</a></button> 
</form>
