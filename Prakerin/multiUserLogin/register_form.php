<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $nis = mysqli_real_escape_string($conn, $_POST['nis']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $role = $_POST['role'];

   $select = " SELECT * FROM user_form WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(nis, name, username, password, role) VALUES('$nis','$name','$username','$pass','$role')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      /* Disable webkit's spin buttons on input type="number" */
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
         -webkit-appearance: none;
         margin: 0;
      }
   </style>
</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>Sign Up</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="nis" required placeholder="enter your NIS (5-digit)" style="text-transform: capitalize;"  pattern="\d*" maxlength="5">
      <input type="text" name="name" required placeholder="enter your name" style="text-transform: capitalize;">
      <input type="text" name="username" required placeholder="enter your username" style="text-transform: lowercase;">
      <input type="password" name="password" required placeholder="enter your password" style="text-transform: capitalize;">
      <input type="password" name="cpassword" required placeholder="confirm your password" style="text-transform: capitalize;">
      <select name="role">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already Have an Account? <a href="login_form.php">Login Now</a></p>
   </form>

</div>

</body>
</html>