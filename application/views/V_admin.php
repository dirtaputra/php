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
		$this->load->view("welcome.php");
	 ?>
		<!-- <h1>Login berhasil !</h1>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a> -->
    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/script.global.js')?>"></script>
	</body>
</html>

<!-- <div class="col-md-3">
					<div class="panel panel-default">
					<div class="panel-heading">Panel heading</div>

	
				  	<table class="table">
				    	<tr>
				    		<td>no</td>
				    		<td>nama</td>
				    	</tr>
				    	<tr>
				    		<td>1</td>
				    		<td>Dirta</td>
				    	</tr>

				  	</table>
				</div>
				</div>	 -->