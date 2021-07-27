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


  <link href="<?php echo base_url();?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="<?php echo base_url();?>/resources/css/creative.min.css" rel="stylesheet">




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

 <header class="masthead" style="position: relative; top: -40px; z-index: -100;">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Bienvenido a la pagina de Alfabetización digital</h1>
          <hr>
          <p class="text-danger" style="background: rgba(0,0,0,0.6); border-radius: 6px; padding: 7px; color: white;">
          Nuestra página esta orientada a enseñar y evaluar los conceptos y habilidades básicos de la informática para que las personas puedan utilizar la tecnología informática en la vida cotidiana y desarrollar nuevas oportunidades sociales y económicas para ellos, sus familias y sus comunidades</p>
          <!--a class="btn btn-primary btn-xl js-scroll-trigger" href="#acerca">Quienes Somos</a-->
        </div>
      </div>
  </header>
    <br>

    <!--section class="bg-primary" id="acerca">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Web System</h2>
            <hr class="light">
            <p class="text-faded">Web System es una pagina dedicada apoyar a personas con bajos conocimientos en manejo de herramientas digitales</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Contactanos</a>
          </div>
        </div>
      </div>
    </section-->



       




<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 menu">
    <!--  <h3>Publicidad</h3>
      <hr>-->
    </div>
    <div class="col-sm-12">
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
        <br>
        <br>
        <br>
    </div>

 




<section id="servicios">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Cursos</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <!--link para ir a cursos on line-->
               <a href="<?php echo base_url();?>/Servicio/index_b"><i class="fa fa-4x fa-diamond text-primary sr-icons"></i> </a>
              <h3>BigBlueButton</h3>
              <p class="text-muted">La videocofenrecia de Moodle</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
               <a href="#"> <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i> </a>
              <h3>Any Desk</h3>
              <p class="text-muted">Clases de Acceso Remoto</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
           <!--link para ir a zoom-->
             <a href="<?php echo base_url();?>/Servicio/index_z">   <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i> </a>
              <h3>Zoom </h3>
              <p class="text-muted">Clases de video llamada por Zoom</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
             <!-- icono de corazon -->
             <!-- <i class="fa fa-4x fa-heart text-primary sr-icons"></i> -->
            <a href="<?php echo base_url();?>/Servicio/index_g">  <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i> </a>
              <h3>Google Meet</h3>
              <p class="text-muted">Manejo de chat</p>
            </div>
          </div>
        </div>
      </div>
    </section>


  <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>TEMAS</h2>


        <a class="btn btn-default btn-xl sr-button" href="<?php echo base_url();?>/Servicio/index_z">Ir a Temas</a>
      </div>
    </div>


 <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2 class="section-heading"><a href="<?php echo base_url();?>/Contactanos/index" >Contáctanos</a></h2>
            <hr class="primary">
            <p>Envianos tus comentarios, dudas y te ayudaremos</p>
          </div>
        </div>

      </div>
    </div>
  </section>






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