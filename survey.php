<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doner_info</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background-color:red;
}
.register_info form{
    position: absolute;
   width: 400px;
   left: 50%;
    transform: translate(-50%);
   background-color: white;
   background-position: center;
    border-radius: 10px;
}
h2{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    color:white;
}
.register_info form{
    border: 2px solid black;
    padding: 0 20px;
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

input[type="radio"]{
    width: 15px;
    height: 10px;

}
input[type="checkbox"]{
    width: 15px;
    height: 10px;
   margin-left: 20px;
   
}
.checkbox_txt{
    line-height: 30px;
    margin-left: 10px;
}

.msg{
    margin: -5px 0 20px 5px;
    padding-top: 10px;
    color: #a6a6a6;
    cursor: pointer;
}
.sign_in{
    margin:30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;

}
button{
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
button a{
    text-decoration: none;
    color: white;
}
.log_in{
    padding-bottom: 20px;
}
</style>

<body>
    <h2>Doner Infromation</h2>
    <div class="register_info">
        <form method="post">
            
            <div class="txt_feild">

                <p>Do you recently done Ear-Piercing?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>
    
                    <p>Do you recently faced any health issue?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>
    
                    <p>Are you currently in any treatment/taking medicine?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>
    
                    <p>Do you recently done any dental treatment?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>
    
                    <p>Do you have any tatoos in your boby?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>

                    <p>Do you taken any vaccine recently?*</p>
                    <p>Yes<input type="radio" name="no" value="yes"required>
                        No<input type="radio" name="no" value="no"required></p><hr>
            
                <fieldset>
                <legend><div class="msgg">Do you suffer any of this illness/diseases?*</div></legend>
                <div class="checkbox_txt"><p>Allergies<input type="checkbox" name="checkbox"></p>
                    Respiratory diseases<input type="checkbox" name="checkbox">
                        <p>Diabetes<input type="checkbox" name="checkbox">
                            Lungs diseases<input type="checkbox" name="checkbox">
                                <p>High BP<input type="checkbox" name="checkbox">
                                    Cancer<input type="checkbox" name="checkbox">
                                        <p>Asthama<input type="checkbox" name="checkbox">
                                            Thairoid<input type="checkbox" name="checkbox">
                                                <p>Heart issue<input type="checkbox" name="checkbox">
                                                    Dengue<input type="checkbox" name="checkbox">
                                                        <p>Kidney issue<input type="checkbox" name="checkbox">
                                                            Kshayam<input type="checkbox" name="checkbox">
                                                                <p>Chickenpox<input type="checkbox" name="checkbox"></div>
                
                </fieldset>
                <p>Did you ever donate blood before?*</p>
                <p>Yes<input type="radio" name="no" value="yes"required>
                    No<input type="radio" name="no" value="no"required></p><hr>  
            <p>No. of Donation</p>
            <p><input type="number" name="number" placeholder="no. of donation" required></p>
            <p>Date of first Donation</p>
            <p><input type="month" name="dft" placeholder="" required></p>
            <p>Date of last Donation</p>
            <p><input type="date" name="dlt" required></p>
            



                <div class="msg"> Make sure the details are correct</div>
                <div class="log_in"><button>
                    <a type="button" href="#"> Register</a>
                   </button> </div>
                </div>
        </form>
    </div>
</body>
</html>