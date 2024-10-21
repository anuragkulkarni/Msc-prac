<?php

$con = new mysqli('localhost','root','','studentdb');
if(!$con){
    die('Could not connect: ' . mysqli_error($con));
}

?>