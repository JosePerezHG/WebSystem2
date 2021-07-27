

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link  href="<?php echo base_url();?>/resources/css/estilo.css" rel="stylesheet">
 <link href="<?php echo base_url();?>/resources/img/montanita.png" rel="icon" type="image/ico">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="<?= base_url()?>/resources/js/popper.min.js""></script>
<script src="<?= base_url()?>/resources/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>/resources/js/Js_Login.js"></script>

<link href="<?php echo base_url();?>/resources/css/fondo.css" rel="stylesheet">  


<form name="form_reg" action="<?=base_url().'usuarios/registro_very'?>" method="POST">
	<div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header"> <b><h3>Registro de Usuarios</h3></div> 
 
          
            <div class="card-body caja_form">
                  
            <?php $validation = \Config\Services::validation(); ?>
            <form id="form1" action="<?php echo base_url();?>/Registro/doSave"  action method="post" class="needs-validation">

                        <div class="col-md-5 mb-3">
                            <br> 
                          <label for="nombre">Nombre</label>
                          <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" value="" required>
                          <?php if($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('nombre'); ?>
                            </div>
                          <?php }?>
   
                        </div>
                                           
                               <div class="col-md-5 mb-3">
                            <br>
                          <label for="correo">Correo</label>
                          <input name="correo" type="email" class="form-control" id="correo" placeholder="Ingrese correo Electrónico" value="" required>
                          <?php if($validation->getError('correo')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('correo'); ?>
                            </div>
                          <?php }?>
                        </div>

                        <div class="col-md-5 mb-3">
                            <br>
                          <label for="usuario">Usuario</label>
                          <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Ingrese Usuario" value="" required>
                          <?php if($validation->getError('usuario')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('usuario'); ?>
                            </div>
                          <?php }?>
  
                        </div>

                        <div class="col-md-5 mb-3">
                            <br>
                          <label for="password">Contraseña</label>
                          <input name="password" type="password" class="form-control" id="password" placeholder="Ingrese contraseña" value="" required>
                          <?php if($validation->getError('password')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('password'); ?>
                            </div>
                          <?php }?>
                        </div>

                  <div class="col-md-12 mb-3">
                  <br>
                    <button class="btn btn-primary" type="submit" name="submit_reg">Registrar</button>    
                      <!-- <input type="submit" value="Registrar" name="submit_reg">Registrar</button>-->
                     
                      <a href="<?php echo base_url();?>/login/index">  <input type="button" value="Iniciar Sesión" class="btn btn-primary"> </a>
                  </div>
                    </form>
            </div>   
        </div>
                </div>       
            </div>                  
        </div>
        </div>
    
      </body>
</html>