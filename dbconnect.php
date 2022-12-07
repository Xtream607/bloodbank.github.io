<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$con = mysqli_connect($servername,$username,$password,$db);

if(!$con){
    echo "<script>alert(' couldnt connect Database')</script>";

}

?>