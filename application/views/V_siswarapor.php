<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
	<script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
	<body>
	<?php
		$this->load->view("header.php");
		$this->load->view("navigasi.php");
	 ?>
	 <div class="col-md-9">
	<table class="table table-bordered"> 
		<thead>
			<th><center>No</center></th>
			<th><center>Nama</center></th>
			<th><center>Cetak</center></th>
		</thead>
		<?php 
		$no = 1;
		foreach($murid as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><a href="<?= base_url() ?>index.php/Rapor/lihat/<?= $u->nis ?>"><?php echo $u->nama ?></a></td>
			<td>
			<!-- <a href="<?= base_url() ?>products/updateProduct/<?= $row->productId ?>">Update</a> -->
				<center><a href="<?= base_url() ?>index.php/Rapor/cetak/<?= $u->nis ?>" class="btn btn-default btn-sm glyphicon glyphicon-print"></a></center> 
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
