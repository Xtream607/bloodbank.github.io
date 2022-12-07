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
            $error = " * Login failed";

        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: montserrat;
        background: linear-gradient(120deg,#2980b9,#8e44ad);
        height: 100vh;
        overflow: hidden;
    }
    .logincontainer{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        background-color: white;
        border-radius: 10px;
    }
    .logincontainer h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
    }
    .logincontainer form{
        padding: 0 40px;
        box-sizing: border-box;
    }
    form .txt_feild{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
       
    }
    .txt_feild input{
        width:100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;

    }
    .span{
        background-color:white ;
        color:red;
        text-align:center;
    }
    
    
    .txt_feild input:focus ~ p,
    .txt_feild input:valid ~ p{
        top: -5px;
        color: #2691d9;

    }
    a{
        text-decoration: none;
        color: #a6a6a6;

    }
    .pass{
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
    }
    .pass:hover{
        text-decoration: underline;

    }
   input[type="submit"]{
        width: 100%;
        height: 30px;
        border: 1px solid;
        background-color: rgb(73, 148, 224);
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor:pointer;
        outline: none;

    }
    input[type="submit"] a{
        text-decoration: none;
        color: #e9f4fb;
    }
    input[type="submit"]:hover{
        background-color: #0a86d9;
    }
    .sign_up{
        margin:30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;

    }
    .sign_up a{
        color: #2691d9;
        text-decoration: none;

    }
    .sign_up a:hover{
        text-decoration: underline;
    }
    .text{
        text-align: center;
        color: red;
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        font-size: larger;
        background-color: rgb(227, 240, 227);
        height: 30px;
        padding-top: 15px;
    }
    .line{
        border-bottom: 2px solid #adadad;
    }
    @media(max-width : 470px){
    .logincontainer{
        width:90%;
    }
}

</style>
<body>

    <div class="logincontainer">
        <h1>Login</h1>
        <p class="text">Blood Doner Thrissure Kerala</p>
        <div class="line"></div>
        <form method="post" action="#">
            <div class="txt_feild">
                <p><span class="span"><?php echo $error ?></span></p>
                <p>User ID</p>
                    <span></span>
                <p><input type="text" name ="uname"placeholder="username" required></p>
                <p>Password</p>
                    <span></span>
                <p><input type="password" name="upass" placeholder="password" required></p>
            </div>
            <div class="pass"><a href="#" onclick="">Forget Password?</a> </div>
            <input type="submit" name="submit" value="LOGIN" id=""> 
            <div class="sign_up">Not a member?<a href="#">signup</a> </div>
        </form>
    </div>
</body>
</html>