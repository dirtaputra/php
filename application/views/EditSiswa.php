<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
	<script src="<?php echo base_url('asset/jquery/jquery.min.js-')?>"></script>
	<body>
	<?php
		$this->load->view("header.php");
		$this->load->view("navigasi.php");
	 ?>
	 <?php foreach($siswa as $u){ ?>
	<div class="col-md-9">
			<form action="<?php echo base_url(). 'index.php/Crud_siswa/do_update'; ?>" method="post" class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-6">
						<input type="hidden" class="form-control" name="nis" value="<?php echo $u->nis ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nis">Nis :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="nis1" value="<?php echo $u->nis ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nama">Nama :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Alamat :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="alamat" value="<?php echo $u->alamat ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Jenis Kelamin :</label>
					<div class="col-sm-6">
						<select class="form-control" name="jenis_kelamin">
				  			<option value="Laki-Laki">Laki-Laki</option>
				  			<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				
				<button type="submit" class="btn btn-success control-label col-md-offset-7">Simpan</button>
			</form>	 	
	</div>	
	<?php } ?>
</body>
</html>