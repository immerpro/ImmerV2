<style>
    .imagencard{
        width: 350px;
        height: 150px;
    }
</style>
<div class="container flex-center flex-lg-column m-5">

    <section class="content" >
        <div class="row">
            <div class="col col-lg-2"></div>

            <div class="col-md-8">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="avatar"><img src="<?PHP echo base_url(); ?>/public/img/woman-1594711_1920.jpg" class="mx-auto d-block imagencard" alt="img">
                        </div>
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <h3 class="box-title">Perfil Administrador</h3>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('rol') == 2): ?>
                            <h3 class="box-title">Perfil Colaborador</h3>
                        <?php endif; ?>

                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if ($this->session->userdata('rol') == 1): ?>
                            <?php echo form_open('AtualizarPerfil'); ?>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('rol') == 2): ?>
                            <?php echo form_open('ColaboradorController/actualizarPerfilCola'); ?>
                        <?php endif; ?>

                        <input type="hidden" name="idUsuario" value="<?= $this->session->userdata('idUsuario') ?>">
                        <p class="h5 label-warning">Rol</p><p><?= $mrol->tipoRol ?><br><br>
                        <p class="h5 label-success">Nombre de Usuario</p><p><input type="text" class="form-control" name="txtusuario" value="<?php echo $perfil->NombreUsuario; ?>" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-length="[6, 10]" ></p><br><br>

                        <p class="h5 label-warning">Nombre Completo</p><p><input type="text" class="form-control" name="txtNombCompl" value="<?php echo $perfil->nombreCompleto; ?>" data-parsley-required="true" data-parsley-trigger="keyup"></p> <br><br>

                        <p class="h5 label-success">Correo Electronico</p><p><input type="email" class="form-control" name="txtemail" value="<?php echo $perfil->email; ?>" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-type="email"></p><br><br>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer"></div>
                    <?php if ($this->session->userdata('rol') == 1): ?>
                        <button type="submit" class="btn bg-orange waves-effect orange" name="btnEditarPerfilAdmin"><i class='fa fa-edit'> Actualizar Perfil Administrador</i></button>

                    <?php endif; ?>
                    <?php if ($this->session->userdata('rol') == 2): ?>
                        <button type="submit" class="btn bg-orange waves-effect orange" name="btnEditarPerfilColabora"><i class='fa fa-edit'> Actualizar Perfil Colaborador</i></button>

                    <?php endif; ?>
                </div>
                <!-- /.box -->

                <?php echo form_close(); ?>
            </div>
            <div class="row">
                <div class="col-8">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo validation_errors(); ?> 

                        </div>
                    <?php endif; ?>



                </div>
            </div>

    </section>



</div>
