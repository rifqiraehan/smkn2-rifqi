<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
	</script><!-- jQuery -->

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
</head><body class="">
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
      <a href="" class="navbar-brand">Rifqi Raehan</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Data Siswa</a></li>
          <li><a href="#">Data Kelas</a></li>
          <li><a href="#">Peminjaman</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lainnya
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../loginPage/reset-password.php">Edit</a></li>
          <li><a href="../loginPage/logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
    </div>

  </div>
</nav>
<!-- End Navbar -->

<main>
    <div class="container py-4">
      <div class="content">
        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Transaksi Peminjaman</h1>
            <p class="col-md-8 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Nobis impedit esse totam mollitia modi nihil nulla molestiae numquam nostrum vel perferendis quaerat, architecto sed qui aliquam aperiam dolorem atque maiores.</p>
            <a href="transaksi-2.php" class="btn btn-outline-dark">Lihat</a>
          </div>
        </div>

        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>Data Siswa</h2>
              <p>Berisi data siswa yang pernah meminjam buku di perpustakaan SMK Negeri 2 Surabaya yang memiliki informasi berupa
                <span class="fst-italic">NIS (Nomor Induk Siswa), Nama Siswa, Alamat Email,
                Kelas, dan Jurusan</span>.
              </p>
              <a href="tabStudent.php" class="btn btn-outline-light" style="margin-top: 1.5rem;">Lihat</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Data Kelas</h2>
              <p>Berisi data kelas yang pernah meminjam buku di perpustakaan SMK Negeri 2 Surabaya yang memiliki informasi berupa
                <span class="fst-italic">Kelas, Jurusan, Jumlah Siswa Peminjam, Wali Kelas,
                dan Ketua Kelas</span>.
              </p></br>
              <a href="kelas-2.php" class="btn btn-outline-dark">Lihat</a>
            </div>
          </div>
        </div>
      </div>

      <footer class="pt-3 mt-4 text-muted text-dark border-top border-dark">
        &copy; 2022
      </footer>
    </div>
  </main>



<div class="container" style="min-height:500px;">
