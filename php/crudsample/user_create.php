<?php
//sample code
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $sql="insert into `crud`(name,email,mobile,password)values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo " Data inserted sucessfully";
    header('location:user_show.php');
  }
  else{
    echo "some issue";
    die(mysqli_error($con));

  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" > -->

    <title>create data</title>
  </head>
  <body>
    <div>
      <center>
      <button><a href="user_show.php">Show user</a></button>  
      <form method ="post">
  <div >
    <br><br><br>
    <label >name</label>
    <input type="text" class="form-control" placeholder="Enter your name"name=name autocomplete="off">
  </div>
  <div >
    <label >email</label>
    <input type="Email" class="form-control" placeholder="Enter your email"name=email autocomplete="off">
  </div>
  <div >
    <label >mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number"name=mobile autocomplete="off">
  </div>
  <div >
    <label >password</label>
    <input type="password" class="form-control" placeholder="Enter your Password"name=password autocomplete="off">
  </div>
  <div> <br>
     <button type="submit" class="btn btn-primary"name=submit>Submit</button>
  </div>

</form></center>

    </div>

  </body>
</html>