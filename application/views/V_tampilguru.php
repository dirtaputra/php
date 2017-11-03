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
	 <div class="col-md-9">
	 	<p><a href="<?php echo base_url('index.php/Crud_guru/tambah') ?>" class="btn btn-success">Tambah</a></p>
	<table class="table table-bordered"> 
		<thead>
			<th><center>No</center></th>
			<th><center>Nama</center></th>
			<th><center>Alamat</center></th>
			<th><center>Jenis Kelamin</center></th>
			<th><center>Action</center></th>
		</thead>
		<?php 
		$no = 1;
		foreach($guru as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td>
			<center><a href="<?= base_url() ?>index.php/Crud_guru/update/<?= $u->nip ?>" class="glyphicon glyphicon-edit"></a> |
				<a href="<?= base_url() ?>index.php/Crud_guru/hapus/<?= $u->nip ?>" class="glyphicon glyphicon-trash"></a></center>
			<!-- <a href="<?= base_url() ?>products/updateProduct/<?= $row->productId ?>">Update</a> -->
				
			</td>
		</tr>
		<?php } ?>
	</table>
	 </div>
	

		<!-- <h1>Login berhasil !</h1>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a> -->
    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/script.global.js')?>"></script>
	</body>
</html>