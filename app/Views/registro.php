
    	<div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header">Haste parte de Websystem</div> 
 
          
            <div class="card-body caja_form">
                  
            <?php $validation = \Config\Services::validation(); ?>
            <form id="form1" action="<?php echo base_url();?>/Registro/doSave"  action method="post" class="needs-validation">

                        <div class="col-md-5 mb-3">
                            <br> 
                          <label for="nombre">Nombres</label>
                          <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombres" value="" required>
                          <?php if($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('nombre'); ?>
                            </div>
                          <?php }?>
   
                        </div>
                        <div class="col-md-5 mb-3">
                            <br>
                          <label for="apellido">Apellidos</label>
                          <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos" value="" required>
                          <?php if($validation->getError('apellidos')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('apellidos'); ?>
                            </div>
                          <?php }?>
  
                        </div>
                         <div class="col-md-5 mb-3">
                            <br>
                          <label for="fecha">Fecha de nacimiento</label>
                         <input type="date" class="form-control" value="" name="fecha" required>
                          <?php if($validation->getError('fecha')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('fecha'); ?>
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
                          <label for="clave">Contraseña</label>
                          <input name="clave" type="password" class="form-control" id="clave" placeholder="Ingrese contraseña" value="" required>
                          <?php if($validation->getError('clave')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('clave'); ?>
                            </div>
                          <?php }?>
                        </div>

                  <div class="col-md-12 mb-3">
                  <br>
                      <button class="btn btn-primary" type="submit">Registrar</button>
                  </div>
                    </form>
            </div>   
        </div>
                </div>       
            </div>                  
        </div>
        </div>
    