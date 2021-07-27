<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/css/editor.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#txt-content').Editor(); //llama a la funcion editor

			$('#txt-content').Editor('setText', ['<p style="color:red;">Por el momento solo se aceptan imágenes de internet, tenemos que hacer que se guarde en la base de datos todo lo que se escriba a aquí</p>']); 

			$('#btn-enviar').click(function(e){
				e.preventDefault();
				$('#txt-content').text($('#txt-content').Editor('getText')); //seleccionarmos el txtarea, tomamos el texto y lo colocamos al mismo tecxto.
				$('#frm-test').submit(); 
			});
		});	
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<form action="<?php echo base_url();?>/AdminArticulo/index3" method="post" id="frm-test">
					<div class="form-group">
						<textarea id="txt-content" name="txt-content"></textarea>
					</div>
					<input type="submit" class="btn btn-default" id="btn-enviar" value="Mostrar Resultado">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div id="texto" style="border:1px solid #000; padding:10px;margin-top:20px;">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>