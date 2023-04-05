<?php
$loginEror='';
$connection=mysqli_connect('localhost','hema','hema','ah');// connect to data base
if(!$connection){
echo "there is an eror!";
}
if(isset($_POST['submit'])){

$sql=" SELECT user_name, user_passcode FROM user" ;
$query=mysqli_query($connection,$sql);
$users=mysqli_fetch_all($query,MYSQLI_ASSOC);
foreach($users as $user){
  //----
$userName=$user['user_name'];
//-----
$password=$user['user_passcode'];

if(($_POST['userName']==$userName)){
if($_POST['password']==$password){


  header("location:../products/home.php");
}
}else{
 $loginEror='check your name , password!';
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
  <link rel="stylesheet" href="../user/userlog.css">
  <title>Document</title>
</head>
<body>

  <div class='cont'>  <!-- the containeer-->
  <form action="../user/userlog.php" method="post"> 

<!-- title-->
  <div class="wel">
  <h3> welcome customer!write your name and password  </h3>
  </div>
  <!--user name-->
  <div style="margin-left:50px;">
      <label style="size: 40px;" for="">User name:</label>
      <input require type="text" style="height:30px;" name='userName'>
  </div>

<!--password-->
    <div   style="margin-left:55px; margin-top:30px;">
     <label style="size: 40px;" for="">Password:</label>
     <input  require type="password" style="height:30px;" name="password">
    </div>

    <!-- submit button-->
<div >
<input type="submit"  value="send" style="height: 40px; width:80px; margin-left:170px; margin-top:30px;" name="submit">
</div>

</form>

<p class="note">if you don't have an account please <a href="../user/userfrom.php">signUp</a></p>

<div> <?php echo $loginEror;?></div>
</div>
</body>
</html>
