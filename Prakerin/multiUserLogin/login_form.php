<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['role'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:sidebar-admin.php');

      }elseif($row['role'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:sidebar-user.php');

      }

   }else{
      $error[] = 'incorrect username or password!';
      header("Refresh:1.5; url=login_form.php");
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="Username">
      <input type="password" name="password" required placeholder="Password">
      <input type="submit" name="submit" value="Submit" class="form-btn">
      <p>Don't have an Account? <a href="register_form.php">Sign Up Now</a></p>
   </form>

</div>

</body>
</html>