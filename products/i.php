<?php
// this form is used to add food for productions
$query='';

$conection=mysqli_connect('localhost','hema','hema','ah');

//checking connection
if(!$conection){
  
  echo" there is a problem in connection";
  


  }else{
    if(isset($_POST['submit'])){
      $type= $_POST['type'];
      $name= $_POST['prName'];
      $ingredients=$_POST['prIngredients'];
      $price = $_POST['prPrice'];
      $image = $_FILES['image']['name'];
    
      $sql="INSERT INTO production
      ( production_Name, production_INgredients, production_PRICE, production_photo, production_Type)
       VALUES ('$name','$ingredients','$price','$image','$type')";
      
      $query= mysqli_query($conection, $sql); }
    
  
      if($query){
        header("location:../products/home.php");
      }



  }









?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="i.css">
  <title>Document</title>
</head>
<body>

<h3 style="margin-bottom: 100px; margin-left:700px; background-color:darkviolet; width: 250px; height:40px; color:azure;
 padding-left:50px; padding-top:15px; border-radius:10px;"> 
add backary productions</h3>
<div style="margin-left: 400px; ">

<form action="" method="post" enctype="multipart/form-data">
  <!-- production type-->

<div class="layouts">
<label for=""> select type of sweets:</label>
<select name="type" id="" name='type'>
<option value="bakery">bakery</option>
<option value="paklava">paklava</option>
<option value="nutella">nutella</option>
</select>

</div>


<div class="layouts">
<label style='margin-left: 70px;'>production name:</label>
<input type="text" name="prName" id="">
</div>

<div class="layouts">
<label  style='margin-left: 35px;'>production ingredients:</label>
<input type="text" name="prIngredients" id="">
</div>


<div class="layouts">
<label  style='margin-left: 120px;'>Price:</label>
<input type="text" name="prPrice" id="">
</div>


<div class="layouts">
  <label for="" style='margin-left: 98px;'>photo:</label>
  <input type="file" name="image"  style="margin-left: 2px;">
</div>


<div class="layouts">
<input type="submit" value="add" name="submit" >
</div>
</form>

<button><a href="home.php" > to home page</a></button>


</div>
  
</body>
</html>