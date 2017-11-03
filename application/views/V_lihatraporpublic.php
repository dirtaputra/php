	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
    <style type="text/css">
    style2 {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: x-small;
    border-width: 1px;
    border-style: solid;
    border-color: #000;
    border-collapse: collapse;
    margin: 10px 0px;
    padding: 10px 6px 20px 15px;
    border: 1px solid #000;
}
    </style>
	</head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
  <script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>

	<body>
    <?php
    $this->load->view("header_public.php");
   ?>
   <span>
     <b>A.Nilai</b>
   </span>
	<table border="1" style="border-collapse: collapse;">
		<tr>
            <th rowspan="2" class="style3" width="2%">No</th>
            <th rowspan="2" class="style3" width="230px">Mata Pelajaran</th>
            <th colspan="7" class="style3" style="text-align:center">Komponen</th>
          </tr>
          <tr>
            <th class="style3" align="center">UTS</th>
            <th class="style3" align="center">UAS</th>
            <th class="style3" align="center">Tugas</th>
            <th class="style3" align="center">Nilai Akhir</th>
            <th class="style3" align="center">Predikat</th>
            <th class="style3" align="center">KKM</th>
            <th class="style3" align="center">Keterangan</th>
          </tr>
          <?php
            $kkm=70;
            for ($i=0; $i < count($list); $i++) { 
            ?>
          <tr>
                <td class="style3" align="center"><?php echo $i+1 ?></td>
                <td class="style3"><?php echo $list[$i]['nama_mapel'];?></td>
                <td class="style3" align="center"><?php echo $list[$i]['nilai_uts'];?> </td>
                <td class="style3" align="center"><?php echo $list[$i]['nilai_uas'];?></td>   
                <td class="style3" align="center"><?php echo $list[$i]['nilai_tugas'];?></td>
                <td class="style3" align="center"><?php
                $uts = $list[$i]['nilai_uts'];
                $uas = $list[$i]['nilai_uas'];
                $tugas = $list[$i]['nilai_tugas'];
                $akhir = $uts*0.3+$tugas*0.2+$uas*0.5;
                echo $akhir;
                 ?></td>       
                <td class="style3" align="center">
                  <?php
                    if ($akhir >= 90) {
                      echo "A";
                    }else if($akhir >= 85 ){
                      echo "B+";
                    }else if($akhir >= 80){
                      echo "B";
                    }else if($akhir >= 75){
                      echo "C+";
                    }else if($akhir >= 70){
                      echo "C";
                    }else if($akhir >=55 && $akhir <=69){
                      echo "D";
                    }else{
                      echo "E";
                    }
                  ?>
                </td>
                <td class="style3" align="center"><?php echo $kkm ?></td> 
                <td class="style3" align="center"><?php
                if ($akhir >= $kkm) {
                  echo "Lulus";
                }else{
                  echo "Tidak Lulus";
                }
                 ?></td>       
            </tr>
            <?php } ?>
	</table>
	    <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/jquery/script.global.js')?>"></script>
	</body>
	</html>