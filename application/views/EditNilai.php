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
			<form action="<?php echo base_url(). 'index.php/Crud_nilai/do_update'; ?>" method="post" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="nis">Nama Siswa</label>
					<div class="col-sm-6">
						<select class="form-control" name="nis">
							<?php
							foreach ($siswa as $u) {
							?>
				  			<option value=<?php echo $u->nis ?>><?php echo"$u->nama"?></option>
				  			<?php } ?>
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nis">Nama Guru</label>
					<div class="col-sm-6">
						<select class="form-control" name="nip">
						
							<?php
							foreach ($guru as $u) {
							?>
				  			<option value=<?php echo $u->nip ?>><?php echo"$u->nama"?></option>
				  			<?php } ?>
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nis">Nama Mapel</label>
					<div class="col-sm-6">
						<select class="form-control" name="kode_mapel">
						
							<?php
							foreach ($mapel as $u) {
							?>
				  			<option value=<?php echo $u->kode_mapel ?>><?php echo"$u->nama_mapel"?></option>
				  			<?php } ?>
						</select>
						
					</div>
				</div>
				<?php foreach ($nilai as $u) { ?>
				<div class="form-group">
					<div class="col-sm-6">
						<input type="hidden" class="form-control" name="id" value="<?php echo $u->id ?>" visibility="hidden" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Nilai UTS :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="uts" value="<?php echo $u->nilai_uts ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Nilai UAS :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="uas" value="<?php echo $u->nilai_uas ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="alamat">Nilai Tugas :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="tugas" value="<?php echo $u->nilai_tugas ?>" required>
					</div>
				</div>
				
				<button type="submit" class="btn btn-success control-label col-md-offset-7">Simpan</button>
			</form>	 
			<?php } ?>	
	</div>	
</body>
</html>