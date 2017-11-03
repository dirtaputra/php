<!DOCTYPE html>
<html>
	<head>
		<title>Public</title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
	<script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
	<body>
	<?php
		$this->load->view("header_public.php");
	 ?>
	 <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar Nama Siswa</div>

  <!-- Table -->
  <table class="table">
    <table class="table table-bordered"> 
		<thead>
			<th><center>No</center></th>
			<th><center>Nama</center></th>
		</thead>
		<?php 
		$no = 1;
		foreach($murid as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><a href="<?= base_url() ?>index.php/Rapor_public/lihat/<?= $u->nis ?>"><?php echo $u->nama ?></a></td>
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
