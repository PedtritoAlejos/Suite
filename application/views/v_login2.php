<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/960.css" media="screen" />
         <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/text.css" media="screen" />
         <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/reset.css" media="screen" />
         <script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->
        
        <link href="<?php echo base_url("plantilla/css/estilos_login.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("plantilla/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("plantilla/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">

                <!-- <style type="text/css">
                        h1{
                                font-size: 22px;
                                text-align: center;
                                margin: 20px 0px;
                        }
                        #login{
                                background: #fefefe;
                                min-height: 500px;
                        }
                        #formulario_login{
                                font-size: 14px;
                                border: 8px solid #112233;		 		
                        }
                        label{
                                display: block;
                                font-size: 16px;
                                color: #333333;
                                font-weight: bold;
                        }
                        input[type=text],input[type=password]{
                                padding: 10px 6px;
                                width: 400px;
                        }
                        input[type=submit]{
                                padding: 5px 40px;
                                background: #61399d;
                                color: #fff;
                        }
                        #campos_login{
                                margin: 50px 0px;
                        }
                        p{
                                color: #f00;
                                font-weight: bold;
                        }
                 </style>-->
    </head>
    <body>
        <?php /*
        $username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
        $password = array('name' => 'password', 'placeholder' => 'introduce tu password');
        $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión'); */
        ?>
        <div class="container" >  
            <div class="col-lg-4 col-md-3 col-sm-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="logo">
<!--                    <img src="https://s16.postimg.org/3wg150ysl/download.jpg"  alt="Logo"  > -->
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAhwAAAAJDZkYzI4ODMzLTFlOTktNDgwNS1iNDhhLTg2NThhOGJmMGNiYw.jpg" 
                         alt="Logo" style="height:200px" > 
                </div>
                <div class="row loginbox">                    
                    <div class="col-lg-12">
                        <span class="singtext" >Iniciar Sesion </span>   
                    </div>
                    <?= form_open(base_url() . '/index.php/login/new_user') ?>
                    <!--<label for="username">Nombre de usuario:</label>-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php
                        if (validation_errors()) {
                            echo "<div class='alert alert-danger alert-dismissable'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>¡Error!</strong> " . validation_errors() . "</div>";
                        }
                        ?>
                    </div>
                    <div class="col-lg-12  col-md-12 col-sm-12">		
                    <?= form_input(['name' => 'username', 'placeholder' => 'nombre de usuario', 'class' => 'form-control']) ?>
                    </div>
<?= form_error('username') ?>
                    <!-- <label for="password">Introduce tu password:</label>-->
                    <div class="col-lg-12  col-md-12 col-sm-12">		
                    <?= form_password(['name' => 'password', 'placeholder' => 'introduce tu password', 'class' => 'form-control']) ?>
                    </div>
                    <?= form_error('password') ?>
                        <?= form_hidden('token', $token) ?>
                    <div class="col-lg-12  col-md-12 col-sm-12">
                    <?= form_submit(['name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'class' => 'form-control']) ?></div>
                    <?= form_close() ?>
                    <?php
                    if ($this->session->flashdata('usuario_incorrecto')) {
                        ?>
                        <p><?= $this->session->flashdata('usuario_incorrecto') ?></p>
                        <?php
                    }
                    ?>


                </div>
                <div class="row forGotPassword">
                    <a href="#" >Olvide correo / contraseña </a> 
                </div>
<?php echo form_close(); ?>
                <br>                
                <br>
                <footer  class="footer">                

                    <p >©2017 AdvisorIT   todos los derechos reservados</p>                 
                </footer> <!--footer Section ends-->

            </div>
            <div class="col-lg-4 col-md-3 col-sm-2"></div>
        </div>


    </body>
</html>