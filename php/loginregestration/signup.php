<?php
include'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hashing the password

    $sql = "INSERT INTO userlogin (name,password) VALUES ('$name','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo " Data inserted sucessfully";
        header('location:login.php');
      }
      else{
        echo "some issue";
        die(mysqli_error($con));
    
      }
}
?>

<form method="POST" action="">

    <label for="name">name:</label>
    <input type="name" name="name" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Register</button><br>
    <button><a href="login.php">login</a></button> 
</form>
