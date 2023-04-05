<?php



$conection=mysqli_connect('localhost','hema','hema','ah');
if(!$conection){
  echo" your problem in my sql is".mysqli_connect_error();
}
if(isset($_POST['submit'])){
  $username_sign=$_POST['username_sign']; // html special chars used to protect from attacks specially xss attack!
  //-------
  $userpasscode_sign=$_POST['userpasscode_sign'];
  //---
  $cities_sign=$_POST['cities_sign'];
  //---
  $userphone_sign=$_POST['userphone_sign'];
  $gender=$_POST['gender'];



  //write sql query to insert data to data base
  $sql=" INSERT INTO user (user_name,user_passcode,cities,user_phone,gender) VALUES ('$username_sign','$userpasscode_sign','$cities_sign','$userphone_sign','$gender')";
  // send data to data base


 if( mysqli_query($conection,$sql)){
 
 header('location:../user/userlog.php');
 }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../user/userform.css">
  <title>Document</title>
</head>
<body>
<h3> AH Users sign-up form</h3>

<div class="food">
  <div style='background-color:white;' class="food1" >food1</div>
  <div style='background-color:white;' class="food2">food2</div>
  <div style='background-color:white;'  class="food3">food3</div>
  <div style='background-color:white;' class="food4">food4</div>
</div>
<!--  use sign up form -->
<form action="../user/userfrom.php" method="post">
  <div class="formcontainer">

  <div >  
    <label for="" class="lname">name :</label>
    <input type="text" require name="username_sign" id="" class="name">
   </div>

   <div class="passcode">  
   passcode: <input type="password" name="userpasscode_sign" id="">
   </div>

<div class='select'>
  <select name="cities_sign" id="cities">
  <option value="Erbil">Erbil</option>
  <option value="Sulaimani">Sulaimani</option>
  <option value="duhok">Duhok</option>
  <option value="halbja">Halabja</option>
   </select>
</div>
   
   <div class="phone number">  
   phoneNumber: <input type="text" name="userphone_sign" id="">
   </div>
   <div class="gender">
     gender : <input type="radio" name="gender" id=""  value="m"> male   <input type="radio" name="gender" id="" value="f"> Fmale
   </div>
    
    
      <div class="sub">
       <input type="submit" value="send" name="submit">
      

      </div>
      <div>
       
      </div>
</div>
</form>







</body>
</html>