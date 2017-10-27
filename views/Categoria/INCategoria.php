<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>
        <h1 class="display-4 orange-text text-center"></h1>
        <div class="flex-center">
            <div style="height: 5vh"></div>
            <?php if ($this->session->flashdata('correcto')): ?>
                <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
<?php endif; ?>
</div>
<?php echo form_open('CategoriaController/InCategoria'); ?>
<div class="flex-center">
    <?php if (validation_errors()): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo validation_errors(); ?> 
        </div>
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-6 col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Categorìa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <i class="fa fa-suitcase fa-2x prefix" aria-hidden="true" ></i>
                        <label for="form1" class="">Categoria</label>

                        <input type="text" id="form1" class="form-control" name="NombreCategoria" required="required">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-pencil fa-2x prefix" aria-hidden="true" ></i>
                        <label for="detallecat" ><b> Detalle de Categoria</b></label>
                        <textarea id="detallecat" class="form-control" name="txtdetalle" required="required"></textarea>
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn bg-orange" name="btnNuevaCategoria" > <i class='fa fa-send'> </i> Crear Categoria</button>

                </div>
                <?php echo form_close(); ?>
            </form>
        </div>
       
        </div>
    </div>
        </section>
</div>
<div style="height: 5vh"></div>




