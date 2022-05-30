<?php
include('inc/header.php');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../multiUserLogin/login_form.php');
}

?>
<title class="title">Data Siswa</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/ajax.js"></script>
<style>
	.title{
		margin-top: 3rem;
	}
</style>
<?php include('inc/container.php');?>
<div class="container">
	<h2>Data Siswa</h2>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped" style="width: 100%;">
			<thead>
				<tr>
					<th style="padding-right: 1px;">No.</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Alamat Email</th>
					<th>Kelas</th>
					<th>Jurusan</th>
				</tr>
			</thead>

		</table>
	</div>
</div>
<?php include('inc/footer.php');?>