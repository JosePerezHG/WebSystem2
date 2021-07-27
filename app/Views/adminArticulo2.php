<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/resources/js/editor.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/resources/css/editor.css">

<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/temas.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/admin.css?v=<?php echo time(); ?>">

<script type="text/javascript">
  $(document).ready(function(){
    $('#articulo').Editor(); //llama a la funcion editor

    $('#articulo').Editor('setText', ['<p style="color:red;">Por el momento solo se aceptan imágenes de internet.</p>']);
  }); 
</script>

<script src="<?= base_url()?>/resources/js/jsAdminArticulo.js"></script>
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
    <div class="col-sm-3 form-admin">
      <h3>Ingresar un nuevo Artículo</h3>
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

            <label for="titulo">Tema</label>
            <?php 
            echo form_dropdown(
              'id_tema', 
              $comboestado,
              '#', 
              'class=" selectpicker form-control" id="id_tema" data-live-search="true" required title="Seleccionar tema"' 
            );    
            ?>

            <br> 
              <label for="titulo">Título</label>
              <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el título" value="" required>
              <?php if($validation->getError('titulo')) {?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('titulo'); ?>
              </div>
              <?php }?>

            </div>
        </div>

    </div>
    <div class="col-sm-9">

      <div class="form-group">
        <textarea id="articulo" name="articulo"></textarea>
        <?php if($validation->getError('articulo')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('articulo'); ?>
        </div>
        <?php }?>
      </div>

      <br>
      <button class="btn btn-primary" type="submit">Registrar</button>
      <?= form_close(); ?>
      <br>
      <br>
      <br>

    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------->
</body>
</html>