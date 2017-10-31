<section class="content">
    <?php echo form_open('registro'); ?>
           <div class="row">
        <div class="col-6 ">
            <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
        </div>
      
    </div>
  
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Registro</h3>

                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <i class="fa fa-user  fa-3x " aria-hidden="true"></i>
                        <label for="nombrecompleto"  class="">Nombre Completo</label>
                        <input type="text" id="nombrecompleto" class="form-control" name="txtnombrecompleto" data-parsley-required="true">

                    </div> 
                    <div class="form-group">
                        <i class="fa fa-envelope fa-3x " aria-hidden="true"></i>
                        <label for="Correoelectronico"  class="">Correo electronico</label>
                        <input type="email" id="Correoelectronico" class="form-control" name="txtcorreo" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="keyup">
                    </div> 
                    <div class="form-group">
                        <i class="fa fa-envelope fa-3x " aria-hidden="true"></i>
                        <label for="usuario"  class="">Usuario</label>
                        <input type="text" id="usuario" class="form-control" name="txtusuario" data-parsley-required="true" >
                    </div> 
                    <div class="form-group">
                        <i class="fa fa-lock fa-3x " aria-hidden="true"></i>
                        <label for="password" class="">Contraseña</label>
                        <input type="password" id="password" class="form-control" name="txtpassword" data-parsley-required="true" 
                               data-parsley-trigger="keyup">
                    </div> 
                    <div class="form-group">
                        <i class="fa fa-lock fa-3x " aria-hidden="true"></i>
                        <label for="configpassword" class="">Confirmar Contraseña</label>
                        <input type="password" id="configpassword" class="form-control" name="txtconfir" data-parsley-required="true" 
                               data-parsley-trigger="keyup" data-parsley-equalto="#password" placeholder="Ingresa nuevamente la contraseña">


                    </div> 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn bg-orange" name="btnRegistro" > <i class='fa fa-send'> </i> Registrar</button>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <?php if ($this->session->flashdata('correcto')): ?>
            <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>

    </div>
    <?php echo form_close(); ?>
</section>
