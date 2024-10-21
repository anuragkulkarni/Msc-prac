<?php
//sample code
include 'connect.php';
$id=$_GET['id'];
$sql="Select * from `studentmaster` where prn=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['studentname'];
$gender=$row['gender'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $sql="update `studentmaster` set studentname='$name',gender='$gender'
  where prn=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo " Data updated sucessfully";
    header('location:student_create.php');
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
      <!-- <button><a href="user_show.php">Show user</a></button>   -->
      <form method ="post">
  <div >
    <br><br><br>
    <label >name</label>
    <input type="text" class="form-control" placeholder="Enter your name"name=name autocomplete="off" value=<?php echo $name?>>
  </div>
  <div>
      <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female,">Female,</option>
            <option value="Other">Other</option>
        </select></div>

  <div> <br>
     <button type="submit" class="btn btn-primary"name=submit>Update</button>
  </div>

</form></center>

    </div>

  </body>
</html>