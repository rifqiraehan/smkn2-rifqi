<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </script><!-- jQuery -->
  <title>Admin Page</title>

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
         margin-bottom: 0;
         border-radius: 0;

      }

      .navbar-right{
         font-family: 'Poppins', sans-serif;
      }

      /* .container{
        background: rgba(0,0,0,0.05);
        width: 100%;
      } */

      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .row.content {height: 450px}

      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;}
      }
   </style>

</head>
<body>

<!-- Start Navbar -->
<nav class="navbar navbar-default">
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
          <li><a href="../live/index.php">Data Siswa</a></li>
          <li><a href="#">Data Kelas</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Peminjaman</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../liveData/index.php">Data Pengguna</a></li>
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

<div class="container-fluid">
  <div class="row content">
    <div class="container col-sm-2 sidenav">
      <ul style="list-style: none;">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>
    <div class="container col-sm-8 text-center">
      <div class="content">
          <h3>Hai, <span>Admin</span></h3>
          <h1>Selamat Datang! <span><?php echo $_SESSION['admin_name'] ?></span></h1>
          <p>Ini Adalah Halaman Admin</p>
          <a href="../live/index.php" class="btn btn-color">Mulai</a>
      </div>
    </div>
    <div class="container col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
</html>