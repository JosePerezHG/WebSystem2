<div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header">Olvidaste Tu contraseña?</div> 
 
          
            <div class="card-body caja_form">
                  
            <?php $validation = \Config\Services::validation(); ?>
            <form id="form1" action="<?php echo base_url();?>/Login/doSave"  action method="post" class="needs-validation">

                        <div class="col-md-5 mb-3">
                            <br> 
                          <label for="usuario">Usuario</label>
                          <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Ingrese nombres" value="" required>
                          <?php if($validation->getError('usuario')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('usuario'); ?>
                            </div>
                          <?php }?>
                        </div>



                        <div class="col-md-5 mb-3">
                            <br>
                          <label for="contraseña">Contraseña</label>
                          <input name="contraseña" type="text" class="form-control" id="contraseña" placeholder="Ingrese contraseña" value="" required>
                          <?php if($validation->getError('contraseña')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('contraseña'); ?>
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
    