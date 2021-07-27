<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 menu">         
    </div>
    <div class="col-sm-4 form-admin">
          <h3>Contáctanos</h3>
          <hr>

            <p>Respondemos en máximo de 4 horas</p>
            <p style="background: green;"><?php echo $mensaje?></p>

            <?php $validation = \Config\Services::validation(); ?>
            <form id="form1" action="<?php echo base_url();?>/Contactanos/doSave" method="post" class="needs-validation">



                            <br> 
                          <label for="nombre">Nombres</label>
                          <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombres" value="" required>
                          <?php if($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('nombre'); ?>
                            </div>
                          <?php }?>

                            <br>
                          <label for="apellidos">Apellidos</label>
                          <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos" value="" required>
                          <?php if($validation->getError('apellidos')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('apellidos'); ?>
                            </div>
                          <?php }?>

                            <br>
                          <label for="dni">Dni</label>
                          <input name="dni" type="text" class="form-control" id="dni" placeholder="Ingrese dni" value="" required>
                          <?php if($validation->getError('dni')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('dni'); ?>
                            </div>
                          <?php }?>

                            <br>
                          <label for="fecha">Fecha de hoy</label>
                          <?php $f_0 = date("Y-m-d");?>
                         <input type="date" class="form-control" value="<?php echo $f_0;?>" name="fecha" required readonly>
                          <?php if($validation->getError('fecha')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('fecha'); ?>
                            </div>
                          <?php }?>

                            <br>
                          <label for="consulta">CONSULTA</label>
                          <textarea class="form-control" name="consulta" id="consulta" cols="30" rows="10" required></textarea>
                          <?php if($validation->getError('consulta')) {?>
                            <div class='alert alert-danger mt-2'>
                              <?= $error = $validation->getError('consulta'); ?>
                            </div>
                          <?php }?>

                  <br>
                  <button class="btn btn-primary" type="submit">Enviar</button>
                  <?= form_close(); ?>
                  <br>
                  <br>
                  <br>
                </form>

    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>
    