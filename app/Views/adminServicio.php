<script src="<?= base_url()?>/resources/js/jsAdminServicio.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>
<!--------------------------------------------------------------------------------------------------------->
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 menu">
	        <h3>Ingresar un nuevo Servicio</h3>
	        <hr>
		</div>
		<div class="col-sm-9">
			<h2 align="center">SERVICIOS</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3 form-admin">

			<?php $validation = \Config\Services::validation(); ?>
    		<?= form_open_multipart('#', array('id' => 'frmreg','name' => 'frmreg')) ?>

			<div class="card">
                <div class="card-body">
					<div class="alert alert-danger"  id="error" >
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                <span class="sr-only">Error:</span>
		              	<p id="mensaje_error"></p>
		            </div>        
		            <div class="alert alert-success"  id="succ" >
		                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
		                <span class="sr-only">Correcto:</span>
		              	<p id="mensaje_ok"></p>
		            </div>

				    <p>* Tipo de Servicio:</p>
					<?php 
					echo form_dropdown(
					'id_tipo_servicio', 
					$comboestado,
					'#', 
					'class="combito" id="id_tipo_servicio" data-live-search="true" required title="Seleccionar estado"' 
					);    
					?>
					<!------------------>
				    <br>
				    <br>
				    <p>* Nombre del Servicio:</p>
				    <input type="text" id="nombre" name="nombre" required title="Nombre del Servicio">
				        <?php if($validation->getError('nombre')) {?>
				            <div class='alert alert-danger mt-2'>
				              <?= $error = $validation->getError('nombre'); ?>
				            </div>
				        <?php }?>
				    <br>
				    <br>
		  			<button type="submit" class="boton-crear">Crear</button>
					<?= form_close(); ?>
		            
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------->

		</div>
		<div class="col-sm-9">

		    <button class="boton-actualizar" id="btn_mostrar">
		    Actualizar</button>
		    <br>
		    <br>
		    <div class="container-fluid temas">
		    <div class="tabla-admin" id="reporte">   

		    </div>
		</div>
		</div>

	</div>
	</div>
</div>
<!--------------------------------------------------------------------------------------------------------->
	 
</body>
</html>