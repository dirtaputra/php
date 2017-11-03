$(document).ready(function(){
	$("li.data_siswa").click(function(){Loadsiswa();});
});

function Loadsiswa(){$(".data").load('application/views/V_siswa.php');};