<?php

include_once("dbconnect.php");
$name = $nameer = $age = $contact = $email = $gender = $place = $taluk = $district = $bloodgroup = $weight = $address = $occupation = $dod = "";


$flag = 1;

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameer = "*Enter name";
        $flag++;
   
    }else{
        $name = $_POST['name'];
        $name = trim($name);
        if(!preg_match("/^[a-zA-Z_ .]*$/",$name)){
            $nameer = "*INVALID_name";
            $flag++;
           
        }
    }

    if($flag==1){
        $name = $_POST['name'];
        $sql = "SELECT * FROM `doner_reg` WHERE `NAME`='$name'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){

            $row = mysqli_fetch_array($result);
            $name = $row['1'];
            $age = $row['2'];
            $contact = $row['7'];
            $email = $row['8'];
            $gender = $row['3'];
            $place = $row['9'];
            $taluk = $row['11'];
            $district = $row['10'];
            $bloodgroup = $row['5'];
            $weight = $row['4'];
            $address = $row['12'];
            $occupation = $row['13'];
            $dod = $row['6'];


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
    <link rel="stylesheet" href="doner_details.css">
</head>
<body>
    <div class="home"><a href="home.html">HOME</a></div>

    <div class="container">
        <h1>SEARCH DONER DETAILS</h1>
        <div class="line"></div>
        <form action="" method="post">
            <div class="form">
                <table>
                    <tr>
                        <td><input type="text" name="name" id=""placeholder="Enter name"></td>
                        <td><input type="submit" name="submit" id=""></td>
                    </tr>
                    <tr>
                        <td><span class="span"><?php echo $nameer ?></span></td>
                    </tr>
                    <div class="box">
                        <tr>
                            <td>NAME</td>
                            <td>: <?php echo $name ?></td>
                        </tr>
                        <tr>
                            <td>BLOOD GROUP</td>
                            <td>: <?php echo $bloodgroup ?></td>
                        </tr>
                        <tr>
                            <td>AGE</td>
                            <td>: <?php echo $age ?></td>
                        </tr>
                        <tr>
                            <td>WEIGHT</td>
                            <td>: <?php echo $weight ?></td>
                        </tr>
                        <tr>
                            <td>DATE OF DONATION</td>
                            <td>: <?php echo $dod ?></td>
                        </tr>
                        <tr>
                            <td>PHONE NO</td>
                            <td>: <?php echo $contact ?></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>: <?php echo $email ?></td>
                        </tr>
                        <tr>
                            <td>PLACE</td>
                            <td>: <?php echo $place ?></td>
                        </tr>
                        <tr>
                            <td>DISTRICT</td>
                            <td>: <?php echo $district ?></td>
                        </tr>
                        <tr>
                            <td>TALUK</td>
                            <td>: <?php echo $taluk ?></td>
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td>: <?php echo $address ?></td>
                        </tr>
                        <tr>
                            <td>OCCUPATION</td>
                            <td>: <?php echo $occupation ?></td>
                        </tr>
                    </div>

                </table>
            </div>
        </form>
    </div>
</body>
</html>