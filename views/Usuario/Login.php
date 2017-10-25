 

<section id="intro" class="intro">
    <div class="intro-content">

        <?php echo form_open('ingresar'); ?>
        <div class="container" style="height: 295px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="well well-trans">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Immerpro</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Software de inventarios para minimercados</h4>
                        </div>
                    </div>
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">

                            <ul class="lead-list">
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Lo primero</strong><br />Facil manejo</span></li>
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Lo segundo</strong><br />Gestiona los inventarios de manera segura</span></li>
                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Lo tercero</strong><br />Agilidad en sus procesos</span></li> 
                            </ul>

                        </div>
                    </div>


                </div><br><br><br><br>
                <div class="col-lg-6">




                    <div id="sendmessage">envio exitoso</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm lead">

                        <div class="col-xs-6 col-sm-6 col-md-6 panel panel-primary" style="margin-left: 100px; margin-top: -40px;">
                            <div class="form-group ">
                                <label>Usuario</label>
                                <input type="text" name="txtusuario" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                <div class="validation"></div>

                                <label>Contraseña</label>
                                <input type="password" name="txtpassword" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                <div class="validation"></div>
                            </div>

                            

                            <input style="margin-left: 70px;" type="submit" value="Ingresar" class="btn btn-skin  btn-lg">
                            <?php echo form_close(); ?>

                            <label style="margin-left: 40px;"><a href=""><b>Olvido de contraseña</b></a></label></div>
                </div>
                </form>	
                </center>


            </div>				

        </div>
    </div>
</div>					
</div>		

</section>
<br>
<br>
<br>




