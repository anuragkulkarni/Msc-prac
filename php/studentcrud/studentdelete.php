<?php

include 'connect.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="delete from `studentmaster` where prn=$id";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data deleted successfully";
        header('location:student_create.php');
    }
    else{   
        echo "Error deleting data";
        }
}

?>