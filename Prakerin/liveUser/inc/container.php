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
<body class="">
<!-- Start Navbar -->
<nav class="navbar navbar-default navbar-fixed">
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
      <li><a href=".././multiUserLogin/user_page.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href=".././liveUser/index.php">Data Siswa</a></li>
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

<div class="container" style="min-height:500px;">
