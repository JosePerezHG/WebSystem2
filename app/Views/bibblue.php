<script src="<?= base_url()?>/resources/js/jsAdminTema.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 menu">
      <h3>VIDEO CONFERENCIA</h3>
      <hr>
      <a href="<?php echo base_url();?>/Servicio/index_z">
        <p>Zoom</p>
      </a>
      <a href="<?php echo base_url();?>/Servicio/index_g">
        <p>Google Meet</p>
      </a>
      <a href="<?php echo base_url();?>/Servicio/index_b">
        <p>BibBlueButton</p>
      </a>
    </div>
<!--------------------------------------------------------------------------------------------------------->
    <div class="col-sm-9">
      <h2 align="center">TEMAS</h2>
      <hr>
        <!--button class="boton-actualizar" id="btn_mostrar">
        Mostrar</button-->
        <br>
        <br>
        <div class="container-fluid temas">
          <div id="listazoom" class="row">
            <?php echo $datos;?>
          </div>
        </div> 
    </div>
  </div>
</div>
		 
</body>
</html>
