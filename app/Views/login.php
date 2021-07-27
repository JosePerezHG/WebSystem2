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

  <title>WEB SYSTEM</title>
  </head>
<br>

	<body>
		
<div class="container">

  
  <section align="center">
  <div class="row" align="center"> <!-- fila1 -->
  <div class="card col-md-4" align="center">
  </div>  
  <div class="card col-md-4" align="center">

  <div class="card-body" >


			<form class="form-signin" action="<?php echo base_url();?>/login/doLogin">
				 <?php $validation = \Config\Services::validation(); ?>

				<!-- Error -->
                            <?php if($validation->getError('user')) {?>
                                <div class='alert alert-danger mt-2'>
                                  <?= $error = $validation->getError('user'); ?>
                                </div>
                            <?php }?>
                            <!-- Error -->
                            <?php if($validation->getError('pass')) {?>
                                <div class='alert alert-danger mt-2'>
                                  <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php }?>

                             <img class="mb-4" src="<?php echo base_url();?>/resources/img/BOTON_INICIARSESION.png" >
     <!-- <h1 class="h3 mb-3 font-weight-normal">Login Web System</h1> -->
      <h2 class="form-signin-heading">Login Web System</h2>
      <br>

				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="user"  name="user" class="form-control" placeholder="Email address" required autofocus>
				     <br>

				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
				<br>
			

			<input type="submit" value="Ingresar" class="btn btn-primary">

<a href="<?php echo base_url();?>/RegistroUsuario/index">  <input type="button" value="Registrarse" class="btn btn-primary"> </a> 
  
			<!--	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>   -->
			
			</form>
			<br>

		</div> <!-- /container -->
  </div>


		
	</body>
</html>