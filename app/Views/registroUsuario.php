<script src="<?= base_url()?>/resources/js/jsRegistroUsuario.js"></script>
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
		<div class="col-sm-4 menu">	        
		</div>
		<div class="col-sm-4 form-admin">
	        <h3>Registro</h3>
	        <hr>

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

		            <br> 
	                <label for="nombre">Nombre de usuario</label>
	                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre de usuario" value="" required>
	                <?php if($validation->getError('nombre')) {?>
			            <div class='alert alert-danger mt-2'>
			            	<?= $error = $validation->getError('nombre'); ?>
			            </div>
		            <?php }?>
		        
		            <br>
		            <label for="correo">Correo</label>
		            <input name="correo" type="email" class="form-control" id="correo" placeholder="Ingrese correo Electrónico" value="" required>
		            <?php if($validation->getError('correo')) {?>
		                <div class='alert alert-danger mt-2'>
		                    <?= $error = $validation->getError('correo'); ?>
		                </div>
		            <?php }?>

		            <br>
		            <label for="clave">Contraseña</label>
		            <input name="clave" type="password" class="form-control" id="clave" placeholder="Ingrese contraseña" value="" required>
		            <?php if($validation->getError('clave')) {?>
		                <div class='alert alert-danger mt-2'>
		                  <?= $error = $validation->getError('clave'); ?>
		                </div>
		            <?php }?>

	                <br>
	                <button class="btn btn-primary" type="submit">Registrar</button>
	                <?= form_close(); ?>
	                <br>
	                <br>
	                <br>

                </div>
            </div>
                </form>

		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>
<!--------------------------------------------------------------------------------------------------------->
</body>
</html>