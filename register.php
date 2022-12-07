<?php

include_once("dbconnect.php");

$name = $age = $contact = $email = $gender = $place = $taluk = $district = $bloodgroup = $weight = $address = $occupation = $dod = "";
$nameer = $ageer = $contacter = $emailer = $genderer = $placeer = $taluker = $districter = $bloodgrouper = $weighter = "";
$flag=1;


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
    if(empty($_POST['age'])){
        $nameer = "*Enter age";
        $flag++;
    }else{
        $age = $_POST['age'];
        $age = trim($age);
        if(!preg_match("/^[0-9]*$/",$age)){
            $ageer = "*INVALID_age";
            $flag++;
        }
    }
    if(empty($_POST['place'])){
        $placeer = "*Enter place";
        $flag++;
    }
    if(empty($_POST['weight'])){
        $placeer = "*Enter weight";
        $flag++;
    }
    if(empty($_POST['taluk'])){
        $thaluker = "*Enter thaluk";
        $flag++;
    }
    if(empty($_POST['gender'])){
        $genderer = "*Enter gender";
        $flag++;
    }
    if(empty($_POST['contact'])){
        $contacter = "*Enter contact";
        $flag++;
    }else{
        $contact = $_POST['contact'];
        // $contact = trim($contact);
        if(!preg_match('/^[0-9]{10}+$/',$contact)){
            $contacter = "*INVALID_contact";
            $flag++;
        }
    }
    if(empty($_POST['email'])){
        $emailer = "*Enter email";
        $flag++;
    }else{
        $email = $_POST['email'];
        $email = trim($email);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailer = "*INVALID_email";
            $flag++;
        }
    }
   

    if($flag == 1){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
            $gender = $_POST['gender'];
            $place = $_POST['place'];
            $taluk = $_POST['taluk'];
            $district = $_POST['district'];
                $bloodgroup = $_POST['bloodgroup'];
                $weight = $_POST['weight'];
                $address = $_POST['address'];
                $occupation = $_POST['occupation'];
                    $dod = $_POST['dod'];

        $sql = "INSERT INTO `doner_reg`(`NAME`,`AGE`,`GENDER`,`WEIGHT`,`BLOOD GROUP`,`DATE OF DONATION`,`PHONE NO`,`EMAIL ID`,`PLACE`,`DISTRICT`,`TALUK`,`ADDRESS`,`OCCUPATION`)
        VALUES ('$name','$age','$gender','$weight','$bloodgroup','$dod','$contact','$email','$place','$district','$taluk','$address','$occupation')";

        $data = mysqli_query($con,$sql);

        if($data){
            echo"<script>alert('new doner entry sucessfull entered')</script>";
         }
         else{
            echo "ERROR:".$sql."<br>".mysqli_error($con);
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
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="home"><a href="home.html">HOME</a></div>
    <div class="register">
        <h1>Blood Doner Details</h1>
        <form action="" method="post">
            <div class="txt_feild">
                <table>
                <tr>
                    <td>Name</td>
                </tr>

                <tr>
                  <td><input type="text" name="name" placeholder="* name"required></td>
                </tr>

                <tr>
                    <td><span class="span"><?php echo $nameer ?></span></td>
                </tr>

                <tr>
                    <td>Age</td>
                </tr>

                <tr>
                  <td><input type="number" name="age" placeholder=" * age" required></td>
                </tr>

                <tr>
                    <td><span class="span"><?php echo $placeer ?></span></td>
                </tr>

                <tr>
                    <td>Gender</td>
                </tr>

                <tr>
                    <td> ---- Male <input type="radio" name="gender" id="" value="male">
                    | Female <input type="radio" name="gender" id=""value="female">
                    | Other <input type="radio" name="gender" id=""value="other">
                </td>
                </tr>

                <tr>
                    <td><span class="span"><?php echo $genderer ?></span></td>
                </tr>
                <!-- <tr>
                    <td>Date of Birth</td>
                </tr>
                <tr>
                  <td><input type="date" name="date" required></td>
                </tr> -->
                <tr>
                    <td>Weight</td>
                </tr>
                <tr>
                  <td><input type="number" name="weight" id="" placeholder="* weight"required></td>
                </tr>

                <tr>
                    <td><span class="span"><?php echo $weighter ?></span></td>
                </tr>

                <tr>
                    <td>Blood Group</td>
                </tr>

                <tr>
                  <td class="select"><select name="bloodgroup" id=""required>
                    <option value="Select">----------Select----------</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="A1+">A1+</option>
                    <option value="A1-">A1-</option>
                    <option value="A1B+">A1B+</option>
                    <option value="A1B-">A1B-</option>
                    <option value="A2+">A2+</option>
                    <option value="A2-">A2-</option>
                    <option value="A2B+">A2B+</option>
                    <option value="A2B-">A2B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                    <option value="INRA">INRA</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                </td>
            </tr><tr><td>.</td></tr>
                <tr>
                    <td>Last Date of Donation</td>
                </tr>
                <tr>
                    <td><input type="date" name="dod" id=""required></td>
                </tr>
                <tr>
                    <td>Place</td>
                </tr>

                <tr>
                    <td><input type="text" name="place" placeholder="* palce" required></td>
                </tr>

                <tr>
                    <td><span class="span"><?php echo $placeer ?></span></td>
                </tr>
               
               <tr>
                <td>District</td>
               </tr>
               <tr>
                <td class="select"><select name="district" id="" required>
                    <option value="">----------select----------</option>
                    <option value="Alappuzha" >Alappuzha</option>
                    <option value="Ernakulam" >Ernakulam</option>
                    <option value="Idukki" >Idukki</option>
                    <option value="Kannur" >Kannur</option>
                    <option value="Kasargod" >Kasargod</option>
                    <option value="Kollam" >Kollam</option>
                    <option value="Kottayam" >Kottayam</option>
                    <option value="Kozhikode" >Kozhikode</option>
                    <option value="Malappuram" >Malappuram</option>
                    <option value="Palakkad" >Palakkad</option>
                    <option value="Pathanamthitta" >Pathanamthitta</option>
                    <option value="Thiruvananthapuram" >Thiruvananthapuram</option>
                    <option value="Thrissur" >Thrissur</option>
                    <option value="Wayanad" >Wayanad</option>
                </select>
                </td>
                </tr><tr><td>.</td></tr>
                
               <tr>
                <td>Taluk</td>
               </tr>
               <tr>
                <td><input type="text" name="taluk" placeholder="* taluk" required></td>
               </tr>

               <tr>
                    <td><span class="span"><?php echo $taluker ?></span></td>
                </tr>

               <tr>
                <td>Phone Number</td>
               </tr>

               <tr>
                <td><input type="number" name="contact" placeholder="* phone number" required></td>
               </tr>
               
               <tr>
                    <td><span class="span"><?php echo $contacter ?></span></td>
                </tr>
               
                <tr>
                    <td>Email ID</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" placeholder="* email" required></td>
                </tr>
               
                <tr>
                    <td><span class="span"><?php echo $emailer ?></span></td>
                </tr>

                <tr>
                    <td>Address</td>
                </tr>
                <tr>
                    <td><textarea name="address" id="" cols="45" rows="4" placeholder="address"></textarea></td>
                </tr>
                <tr>
                    <td>Occupation</td>
                </tr>
                <tr>
                    <td><input type="text" name="occupation" id=""placeholder="occupation"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="NEXT"></td>
                </tr>
              </table>
              
                
              
                <div class="msg"> Make sure the details are correct</div>
              
            </div>
        </form>
    </div>
</body>
</html>