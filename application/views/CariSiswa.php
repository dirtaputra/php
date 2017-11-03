<input id="keyword" placeholder="keyword" /> <button id="searchBtn">Search</button>
<div id="result"></div>
<script src="<?=base_url('asset/jquery-3.1.1.min.js')?>"></script>
<script>
	function load_artikel() {
		var keyword = $('#keyword').val();
		$.ajax({
			'url' : '<?=site_url('artikel/get')?>/' + keyword, 'dataType' : 'json', 'success' : function(response) {
				$('#result').html('');
				for(i=0;i<response.length;i++) {
					artikel = response[i];
					$('#result').append('<h1>'+artikel.nama+'<h1>');
					$('#result').append('<p>'+artikel.alamat+'<p>');
				}
			}
		});
	}

	$(document).ready(load_artikel);
	$('#searchingBtn').click(load_artikel);
	$('#keyword').keyup(load_artikel);
</script>