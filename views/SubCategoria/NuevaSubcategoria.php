<section class="content">
    <div style="height: 2vh"></div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-xs-7">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-warning"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php echo form_open('Subcategoria/SubInCategoria'); ?> 
                    <input type="hidden" name="codigoCategoria" value="<?= $codcategoria ?>">
                    <h1 class="h1 orange-text text-center">subcategoria de <?= $nombrecategoria ?></h1>

                    <div class="form-group">
                        <i class="fa fa-folder-o fa-2x prefix "></i>
                        <label for="form1" class="">Subcategoria</label>
                        <input type="text" id="form1" class="form-control" name="NombreSubcategoria">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-pencil-square-o fa-2x prefix "></i>
                        <label for="form1" class="">Detalle de Subcategoria </label><br>

                        <textarea class="form-control" placeholder="Detalle Subcategoria" name="detalSubCategoria"></textarea> 

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-orange"><i class='fa fa-send'> Crear SubCategoria</i></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>



        </div>
        <!-- /.box-body -->
    </div>

</section>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
