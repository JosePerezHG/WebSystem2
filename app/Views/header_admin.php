<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/temas.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/admin.css?v=<?php echo time(); ?>">
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
    
  .carousel-inner img {
    width: 60%;
    max-height: 300px;
  }

  .carousel-inner{
    height: 360px;
    align-content: center;
  }
  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>/PortadaAdmin/index">WEBSystem</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--li class="active"><a href="<?php echo base_url();?>/Portada/index.php">Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Video Conferencia<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>/Servicio/index">Zoom</a></li>
            <li><a href="#">Google Meet</a></li>
            <li><a href="#">BibBlueButton</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conexiones remotas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">TeamWeaver</a></li>
            <li><a href="#">Anydeskt</a></li>
            <li><a href="#">Escritorio remoto de Chrome</a></li>
          </ul>
        </li-->
    
        <!--li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ofiice<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Word</a></li>
            <li><a href="#">Excel</a></li>
            <li><a href="#">PowerPoint</a></li>
          </ul>
        </li-->
        <li>
          <a class="navbar-brand" href="<?php echo base_url();?>/AdminServicio/index">Servicios</a>
        </li>
        <li>
          <a class="navbar-brand" href="<?php echo base_url();?>/AdminTema/index">Temas</a>
        </li>
        <li>
          <a class="navbar-brand" href="<?php echo base_url();?>/AdminArticulo2/index">Articulos</a>
        </li>
        <!--li>
          <a class="navbar-brand" href="<?php echo base_url();?>/Contactanos/index">Contactanos</a>
        </li-->
      </ul>
      <ul class="nav navbar-nav navbar-right">

          <?php
          $session = \Config\Services::session(); 
           if($session->has('usuario')){
            ?>
            <li class="nav-item">
            <a class="nav-link" class="btn btn-outline-success my-2 my-sm-0">
            <?php
            echo $session->get('desuser');
            ?>
            </a>
          </li>
           <?php 
            ?>
            <li class="nav-item">
           <a class="nav-link"  href="<?php echo base_url();?>/login/cerrarsesion" class="btn btn-outline-success my-2 my-sm-0">
           <span class="glyphicon glyphicon-user"></span>Cerrar Sesion</a>   
           </li>   
         <?php
          } else{
            ?>
            <li class="nav-item">
            <a href="<?php echo base_url();?>/login/index" class="btn btn-outline-success my-2 my-sm-0">
             <span class="glyphicon glyphicon-user"></span>Ingresar</a>  
             </li>
          <?php
          }   
          ?>
        <li>
          <a href="<?php echo base_url();?>/Portada/index">
          <span class="glyphicon glyphicon-user"></span>
          Ir a Usuario</a>
        </li>
        <!--li>
          <a href="<?php echo base_url();?>/Registro/index">
          <span class="glyphicon glyphicon-user"></span>
          Registro</a>
        </li-->
        <!--li>
          <a href="#">
          <span class="glyphicon glyphicon-log-in"></span>
          Ingreso</a>
        </li-->
      </ul>
    </div>
  </div>
</nav>
