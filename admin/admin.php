<?php $logIn_eror='';
$connection=mysqli_connect('localhost','hema','hema','ah'); //connect to database 
if(!$connection){ // cheking connection to database
  echo 'Connection error: '. mysqli_connect_error();
}
$sql_command='SELECT admin_name, admin_pass From admin'; //sql query to select data from data base
$result=mysqli_query($connection,$sql_command); 
$admins=mysqli_fetch_all($result,MYSQLI_ASSOC);
if(isset($_POST['submit'])){
  foreach($admins as $admin){
    
   if($_POST['admin_name']==$admin['admin_name']){

    if( $_POST['admin_code']==$admin['admin_pass']){
      header("location:../products/i.php");
                                                  }
                                                  }
   
   else{
    $logIn_eror="check your name and pass code";
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
  <link rel="stylesheet" href="../admin/s.css">
  <title>Document</title>
</head>
<body>
  <div class='cont'>  
    <!-- admin login form-->
   <form action="../admin/admin.php" method="post">

    <div class="wel">
    <h3> welcome owner!write your name and password  </h3>
    </div>
  
    <!-- user name of admin-->

    <div style="margin-left:50px;">
    <label style="size: 40px;" for="">User name:</label>
    <input require type="text" style="height:30px;" name="admin_name">
    </div>


<!-- pass code of admin-->
    <div style="margin-left:55px; margin-top:30px;"> 

    <label style="size: 40px;" for="">Password:</label>
    <input require type="password" style="height:30px;" name='admin_code'>
  
    </div>
 
<div style="">
<input type="submit" value="send" style="height: 40px; width:80px; margin-left:170px; margin-top:30px;" name='submit'>
</div>
</form>

<h3 class="log"> <?php echo $logIn_eror; ?></h3>

</div>


</body>
</html>