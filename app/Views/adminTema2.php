<script src="<?= base_url()?>/resources/js/jsAdminTema.js"></script>
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
      <h3>Ingresar un nuevo Tema</h3>
      <hr>
    </div>
    <div class="col-sm-9">
      <h2 align="center">Temas</h2>
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

              <p>* Servicio:</p>
              <?php 
              echo form_dropdown(
                'id_servicio', 
                $comboestado,
                '#', 
                'class=" selectpicker form-control" id="id_servicio" data-live-search="true" required title="Seleccionar estado"' 
              );    
              ?>
              <!------------------>
              
              <br>
              <p>* Descripcion:</p>
              <textarea name="descripcion" id="descripcion" rows="1" required class="form-control">
              </textarea>
                    <?php if($validation->getError('descripcion')) {?>
                        <div class='alert alert-danger mt-2'>
                          <?= $error = $validation->getError('descripcion'); ?>
                        </div>
                    <?php }?>
              <br>
              <br>
              <p>* Imagen:</p>
              <input type="file" id="foto" lang="es" name="foto" style='width:100%;'>
                    <?php if($validation->getError('foto')) {?>
                        <div class='alert alert-danger mt-2'>
                          <?= $error = $validation->getError('foto'); ?>
                        </div>
                    <?php }?>
              <br>
              <button type="submit" class="boton-crear">Crear</button>
              <?= form_close(); ?>
          </div>  
      </div>
    </div>
        
    

    <div class="col-sm-9">
        <button class="boton-actualizar" id="btn_mostrar3">
        Mostrar</button>
        <br>
        <br>
        <div class="container-fluid temas">
          <div id="reporte" class="row">
          </div>
        </div>  
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------->
     
</body>
</html>
