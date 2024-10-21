<?php

include 'connect.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="delete from `crud` where id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data deleted successfully";
        header('location:user_show.php');
    }
    else{   
        echo "Error deleting data";
        }
}

?>