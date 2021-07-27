<script src="<?= base_url()?>/resources/js/jsAdminTema.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>

<section>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="card">

  <div class="card-header">
    <h3 class="card-title">Ingresar un nuevo Tema</h3>
  </div>
  
  <div class="card-body">
    <div class="alert alert-danger" id="error">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      <p id="mensaje_error"></p>
    </div>
    <div class="alert alert-success"  id="succ" >
      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
        <span class="sr-only">Correcto:</span>
      <p id="mensaje_ok"></p>
    </div>

  <?php $validation = \Config\Services::validation(); ?>
  <?= form_open_multipart('#', array('id' => 'frmreg','name' => 'frmreg')) ?>
    <div class="input-group input-group-lg">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-user"></span>
      </span>

      <input type="text" class="form-control" id="id_servicio" name="id_servicio" required title="Solo digitos numericos" placeholder="Id del Servicio al que pertenece">
        <!-- Error -->
        <?php if($validation->getError('id_servicio')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('id_servicio'); ?>
            </div>
        <?php }?>
    </div>
    <div class="form-group">
      <label for="descripcion">* Descripcion:</label>
      <textarea name="descripcion" id="descripcion"  rows="3" class="form-control" placeholder="Ingresar descripcion" required>
      </textarea>
    </div>
    <div class="form-group">
      <label for="foto">Imagen:</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="foto" lang="es" name="foto">
        <label class="custom-file-label" for="foto">Seleccionar Archivo</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
    <button type="button" id="cerrarreg" class="btn btn-default">Cerrar</button>
  <?= form_close(); ?>       
  </div>

</div>
</div>
</div>
    
<div class="col-md-8"><!--Inzq  -->
    <h3 class="card-title">Listado</h3>
  <button class="btn btn-primary" id="btn_mostrar">
  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
  Mostrar</button>   
    <div id="reporte" class="row">             
    </div>                 
  </div>
  </div>
  </div>

</section>  

		