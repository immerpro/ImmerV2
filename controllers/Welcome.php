<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {

        $template1 = '<section class="content">
  <div class="box box-warning">
 
  <div class="box box-warning">
    <h3 class="box-title">Productos</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
            
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    Registre, actualize, liste categorias ,subcategorias y productos

  </div>
  <!-- /.box-body -->
  <div class="box-footer">
   
  </div>
  <!-- box-footer -->
</div>
 <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Novedades</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              Realize un reporte y notifica  los productos vencidos ,vendidos<br>
              recupere las categorias, subcategorias , productos,proveedores
              habilite y descarte los colaboradores
             
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Inventario</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              Registre, consulte ordenes de entrada y salida de sus productos<br>
              registre,consulte,actualize, inaciva los proveedores 
             
            </div>
            <!-- /.box-body -->
          </div>
        </section>
       
';
       
        $data = array(
            'page_title' => 'ImmerPro- Admin',
            'heading' => 'Bienvenido Administrador(a)'.$this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'))->nombreCompleto,
            'contenido' => $template1,
     
            'perfil' => $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario'))->NombreUsuario 
        );
        $this->parser->parse('templates/layout', $data);
    }

    public function envio() {
        $this->email->from('immerpro2018@gmail.com', 'ImmerPRO');
        $this->email->to('proyecto.medd@gmail.com');
        $this->email->subject('Recuperaci0n de password en nuestra plataforma');

        $html = '<h2>Pulsa  o copia y pega el siguiente enlace  en el navegador  para recuperar la clave </h2><hr><br>';
        $html .= '<a  href="' . base_url() . 'UsuarioController/recuperacionClaveXEmail/' . md5(123456) . '">';
        $html .= base_url() . 'UsuarioController/recuperacionClaveXEmail/' . md5(123456) . '</a>';

        $this->email->message($html);

        if ($this->email->send()) {
            echo "enviado";
        }
    }

}
