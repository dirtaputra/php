<html>
<head>
	<title>Data Sekolah</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
	<script src="<?php echo base_url('asset/jquery/jquery-3.1.1.min.js')?>"></script>
	<body>
<?php
$this->load->view('header');
$this->load->view('navigasi');
?>
<div class="col-md-9">
	<div id="result">
	  <table class="table">
	    <tr>
			<th>No</th>
			<th>Nama</th>
			<th>Mapel</th>
			<th>Uts</th>
			<th>UAS</th>
			<th>Tugas</th>
			<th>Action</th>
		</tr>
		<?php 
		for ($i=0; $i < count($rapor); $i++) { 
		?>
		<tr>
			<td><?php echo $i+1 ?></td>
			<td><?php echo $rapor[$i]['nama'] ?></td>
			<td><?php echo $rapor[$i]['nama_mapel']?></td>
			<td><?php echo $rapor[$i]['nilai_uts']?></td>
			<td><?php echo $rapor[$i]['nilai_uas']?></td>
			<td><?php echo $rapor[$i]['nilai_tugas']?></td>
			<td><a href="<?= base_url() ?>index.php/Crud_nilai/update/<?= $rapor[$i]['id'] ?>" class="glyphicon glyphicon-edit"></a> 
				
				<a href="<?= base_url() ?>index.php/Crud_nilai/delete/<?= $rapor[$i]['id'] ?>" class="glyphicon glyphicon-remove"></a>
				<!-- <button type='button' class='btn btn-success' id='hapus' onclick='hapus(".$rapor[$i]['id'].")' > -->
			</td>
		</tr>
		<?php } ?>
	  </table>
	</div>
	</div>
</body>
<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js') ?>" ></script>
</html>