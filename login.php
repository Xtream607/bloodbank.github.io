<?php

include_once("dbconnect.php");
$username = $password = "";
$error = "";
$flag = 1;

if(isset($_POST['submit'])){
    if(empty($_POST['uname'])){
        $error = "* Enter username";
        $flag++;
    }
    if(empty($_POST['upass'])){
        $error = "* Enter password";
        $flag++;
    }
    if($flag==1){
        $username = $_POST['uname'];
        $password = $_POST['upass'];

        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)>0){
            echo "<script>alert('Login sucessfull')</script>";
            header('location:home.html');
        }
        else{
            echo "<script>alert('Login failed')</script>";

        }
    }
}


?>

