  <script src="<?= base_url()?>/resources/js/jsAdminTema.js"></script>
  <script>
    ruta='<?= base_url()?>';  
    $(document).ready(function(){               
          doaction();
      });
  </script>
<style>
  .banner {
    margin: -320px 0px 0px 0px;
  }
  .jumbotron-fluid{
    width: 100%px; 
    height: 300px; 
    overflow: hidden;
  }
</style>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img class="banner" src="<?= base_url()?>/resources/img/I2.jpg" alt="">
  </div>
</div>
<!--header class="masthead">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading">Bienvenido a la pagina de Alfabetización digital</h1>
      <hr>
      <p class="text-danger">
      Nuestra página esta orientada a enseñar y evaluar los conceptos y habilidades básicos de la informática para que las personas puedan utilizar la tecnología informática en la vida cotidiana y desarrollar nuevas oportunidades sociales y económicas para ellos, sus familias y sus comunidades</p>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#acerca">Quienes Somos</a>
    </div>
  </div>
</header-->
</div>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 menu">
      <h3>Publicidad</h3>
      <hr>
    </div>
    <div class="col-sm-9">
      <h2 align="center">ARTICULOS RECIENTES</h2>
      <hr>
        <!--button class="boton-actualizar" id="btn_mostrar2">
        Mostrar</button-->
        <br>
        <br>
        <div class="container-fluid temas">
          <div id="listazoom2" class="row">
            <?php echo $datos;?>
          </div>
        </div> 
        <hr>
    </div>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  
 <div class="modal fade" id="moddetalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header" style="padding-bottom: 0px">
        <span class="modal-title" id="exampleModalLabelc" style="padding: 0px;margin: 0px;font-size: 16px;font-weight: bold;text-transform: uppercase;"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
       		<div class="panel panel-primary" style="margin-top:10px"> 
				<div class="panel-heading"> 
					<h3 class="panel-title">DETALLE DE MENSAJE</h3> 
				</div> 
			<div class="panel-body"> 
				<div class="form-group">
				
		
			 
				    </div>	   	
				</div>
    		</div>
    		</div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 20%">Salir</button>
        
      </div>
    </div>
  </div>
</div>
 
-->

<!-- Footer -->
</body>
</html>