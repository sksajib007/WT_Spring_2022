<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
  <?php
  
  
  if ( isset($_POST['add']) ){
     //Get form value 
  $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $age = $_POST['age'];
  
 $email = $_POST['email'];
  $Password = $_POST['password'];

 echo "<pre>";
  print_r($_POST);
  
  echo"</pre>";

  }
  //Empty Value check
  if(empty($fname) || empty($lname) || empty($age) || empty($designation) ||empty($PreferredLanguage) ||empty($email) ||empty($Password) )
  {
    $mess= "<p  \">All fields are required</p>";
  }
  else{
    $mess= "<p  \">All SET</p>";
  }
  ?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Registration Form</h1>
    
    <?php 
    //show validation message
    if (isset($mess)){
      echo $mess;
    }
    
    ?>
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text" name="fname" ></td>
   </tr>
   <tr>
    <td>Last Name :</td>
    <td><input type="text" name="lname" ></td>
   </tr>
   <tr>
    <td>Age :</td>
    <td><input type="number" name="age" placeholder="Only Integer"></td>
   </tr>
   <tr>
    <td>Designation :</td>
    <td>
     <input type="radio" name="designation[]" value = "Junior Programmer"> Junior Programmer<br>
     <input type="radio" name="designation[]"value = "Senior Programmer"> Senior Programmer<br>
     <input type="radio" name="designation[]"value = "Project Lead"> Project Lead<br>
    </td>
   </tr>
   <tr>
    <td>Preferred Language </td>
    <td>
     <input type="checkbox" name="Preferred Language[]" value = "JAVA"> JAVA
     <input type="checkbox" name="Preferred Language[]" value = " PHP "> PHP
     <input type="checkbox" name="Preferred Language[]" value = "C++"> C++
     
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email"name="email"></td>
   </tr>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password"></td>
   </tr>
  
   <tr>
    <td ><input type="submit" name="add" value="Submit"></td>
    <td ><input type="reset"name="reset"  value="Reset"></td>
   
    </tr>
    <tr>
   <td for="myfile">Please choose a file
   <input type="file" id="myfile" name="myfile"></td>
   </tr>
   
  </table>
 </form>
</body>
</html>