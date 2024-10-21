<?php

$con= new mysqli('localhost','root','','loginsystem');
if(!$con){
    die('canot connect'. mysqli_error($con));
}

?>