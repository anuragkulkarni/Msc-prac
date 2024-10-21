<?php
//sample code
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $sql="insert into `studentmaster`(studentname,gender)values('$name','$gender')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo " Data inserted sucessfully";
    // header('location:user_show.php');
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
        <center>Create student</center>
      <center>
      <!-- <button><a href="user_show.php">Show user</a></button>   -->
      <form method ="post">
  <div >
    <br><br><br>
    <label >name</label>
    <input type="text" class="form-control" placeholder="Enter your name"name=name autocomplete="off">
  </div>
  <div >
  <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female,">Female,</option>
            <option value="Other">Other</option>
        </select>

  </div>
  <div> <br>
     <button type="submit" class="btn btn-primary"name=submit>Submit</button>
  </div>
<!--Showing the details -->
</form></center>
    </div><br><br>
    <center>See student</center>
    <table class="table">
            <thead>
                <tr>
                <th >id </th>
                <th> Name </th>
                <th> Gender </th>

                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect.php';
                    $sql='Select * from `studentmaster`' ;
                    $result=mysqli_query($con,$sql) ;
                    if($result){

                        while($row=mysqli_fetch_assoc(($result))){
                            $id=$row['prn'];
                            $name=$row['studentname'];
                            $gender=$row['gender'];
                            echo'<tr>
                                <th >'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$gender.'</td>
                                <td>
                                <button><a href="studentupdate.php?id='.$id.'">update</a></button>
                                <button><a href="studentdelete.php?id='.$id.'">delete</a></button>
                                </td>
                                </tr>
                            ';

                        }


                    }
                ?>
            </tbody>
        </table>
        </center>

    </div>

  </body>
</html>