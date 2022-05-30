<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
  </script><!-- jQuery -->
   <title>User Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Kalam&display=swap');

      .navbar-brand{
         font-family: 'Kalam', cursive;
      }

      .navbar {
         width: 100%;
         background: #fff;
         box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);
         padding: 1rem 9%;
         align-items: center;
         justify-content: space-between;
         font-size: medium;

      }

      .navbar-right{
         font-family: 'Poppins', sans-serif;
      }
   </style>

</head>
<body>

<!-- Start Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
       data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="" class="navbar-brand">Hanbook</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../liveUser/index.php">Data Siswa</a></li>
          <li><a href="#">Data Kelas</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Peminjaman</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lainnya
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href=".././multiUserLogin/logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
    </div>

  </div>
</nav>
<!-- End Navbar -->

<div class="container">

   <div class="content">
      <h3>Hai, <span>User</span></h3>
      <h1>Selamat Datang! <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Ini Adalah Halaman User</p>
      <a href="../liveUser/index.php" class="btn btn-color">Mulai</a>
   </div>

</div>

</body>
</html>