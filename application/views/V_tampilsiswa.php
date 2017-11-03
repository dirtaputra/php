<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
	<script src="<?php echo base_url('asset/jquery-3.1.1.min.js')?>"></script>
	<body>
	<?php
		$this->load->view("header.php");
		$this->load->view("navigasi.php");
	 ?>
	 <div class="col-md-9">
	 	<p><a href="<?php echo base_url('index.php/Crud_siswa/tambah') ?>" class="btn btn-success">Tambah</a></p>
	<table class="table table-bordered"> 
		<thead>
			<th><center>No</center></th>
			<th><center>Nrp</center></th>
			<th><center>Nama</center></th>
			<th><center>kegiatan</center></th>
			<th><center>Sebagai</center></th>
			<th><center>Action</center></th>
		</thead>
		<?php 
		$no = 1;
		foreach($siswa as $u){ 
		?>
		<tbody id="showdata">
		
		</tbody>
		
	</table>
	 </div>
	 <script>
	 	$(function(){
	 		showAllSiswa();
	 		//function
	 		function showAllSiswa(){
	 			$.ajax({
	 				type:'ajax',
	 				url:'<?php echo base_url() ?>index.php/Crud_siswa/ShowAllSiswa',
	 				async:false,
	 				dataType:'json',
	 				success:function(data){
	 					var html = '';
	 					var i;
	 					for (i = 0;i<data.length;i++) {
	 						html += '<tr>'+
	 		'<td>'+i+'</td>'+
			'<td>'+data[i].nis+'</td>'+
			'<td>'+data[i].nama+'</td>'+
			'<td>'+data[i].alamat+'</td>'+
			'<td>'+data[i].jenis_kelamin+'</td>'+
			'<td>'+
				'<a href="<?= base_url() ?>index.php/Crud_siswa/update/'+data[i].nis+'" class="glyphicon glyphicon-edit"></a> |'+
				'<a href="<?= base_url() ?>index.php/Crud_siswa/hapus/<?= $u->nis ?>" class="glyphicon glyphicon-trash"></a>'+
			'</td>'+
		'</tr>';
	 						$('#showdata').html(html)
	 					}
	 				},
	 				error: function(){
	 					alert('Could Not Get Data');
	 				}
	 			});
	 		}
	 	});
	 </script>
	

		<!-- <h1>Login berhasil !</h1>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a> -->
    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/script.global.js')?>"></script>
    <?php } ?>
	</body>
</html>