<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" constant="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rede de Atendimento</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<script type="text/javascript">

		var base_url = "<?php echo base_url()?>";

		$(function(){
			$('#estados').change(function(){

				var id_estado = $('#estados').val();
				
				$.post(base_url + 'index.php/ajax/cidade/getCidades', {
					id_estado : id_estado
				}, function(data){
					$('#cidades').html(data);
					$('#cidades').removeAttr('disabled');
				});
			});
		});

	</script>

</head>
<body>

<div class="container">
	<div class="row">

		<h1>Rede de Atendimentos</h1>

		<div class="form-group">

			<label for="estados">Municípios</label>

			<select id="estados" name="estados" class="form-control">
				<?php echo $options_estados; ?>
			</select>
		</div>

		<div class="form-group">

			<label for="cidades">Bairro</label>

			<select id="cidades" name="cidades" class="form-control" disabled>
				<option>Selecione o Bairro</option>
			</select>
		</div>

	</div>
</div>

</body>
</html>
