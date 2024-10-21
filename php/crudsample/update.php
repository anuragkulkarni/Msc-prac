<?php
//sample code
include 'connect.php';
$id=$_GET['id'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
  where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo " Data updated sucessfully";
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
    <input type="text" class="form-control" placeholder="Enter your name"name=name autocomplete="off" value=<?php echo $name?>>
  </div>
  <div >
    <label >email</label>
    <input type="Email" class="form-control" placeholder="Enter your email"name=email autocomplete="off" value=<?php echo $email?>>
  </div>
  <div >
    <label >mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number"name=mobile autocomplete="off" value=<?php echo $mobile?>>
  </div>
  <div >
    <label >password</label>
    <input type="password" class="form-control" placeholder="Enter your Password"name=password autocomplete="off" value=<?php echo $password?>>
  </div>
  <div> <br>
     <button type="submit" class="btn btn-primary"name=submit>Update</button>
  </div>

</form></center>

    </div>

  </body>
</html>