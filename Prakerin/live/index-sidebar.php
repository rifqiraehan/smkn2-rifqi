<?php
include('inc/header-sidebar.php');

session_start();

if(!isset($_SESSION['admin_name'])){
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

	.container{
		margin-left: 3rem ;
	}
</style>
<?php include('inc/container-sidebar.php');?>
<div class="container">
	<h2>Data Student</h2>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addRecord" class="btn btn-success">Add New Record</button>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped" style="width: 100%;">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Alamat Email</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th></th>
					<th></th>
				</tr>
			</thead>

		</table>
	</div>
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Record</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="nis" class="control-label">NIS</label>
							<input type="number" class="form-control" id="nis" name="nis" placeholder="Input NIS">
						</div>
						<div class="form-group"
							<label for="name" class="control-label">Nama</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Input Nama" required>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Alamat Email</label>
							<input type="text" class="form-control"  id="alamat" name="alamat" placeholder="Input Alamat Email" required>
						</div>
						<div class="form-group">
							<label for="kelas" class="control-label">Kelas</label>
							<select name="kelas" class="form-control" id="kelas">
								<option value="X">X</option>
								<option value="XI">XI</option>
								<option value="XII">XII</option>
								<option value="XIII">XIII</option>
							</select>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Jurusan</label>
							<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Input Jurusan">
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>
<?php include('inc/footer.php');?>