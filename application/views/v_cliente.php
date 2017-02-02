<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/960.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/estilos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/ui-darkness/jquery-ui.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/funciones.js"></script>
        <div class="ibody">
            <div class="jumbotron">
                <h3>Registrar cliente</h3>

            </div>
            <div class="fcontacto">
                
                <?php echo form_open('c_cliente/agre_client', 'name="form1"'); ?>
                <div class="row" style="padding: 20px">
                    <div >
                        <input type="text" name="nombre" id="name" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div >
                        <input type="text" name="descripcion_cliente" maxlength="15" onpaste="return false"  placeholder="Descripcion" class="form-control" required/>
                    </div>
                    <label style="color: white;">Fecha de inicio</label>
                    <div >
                        <input type="date" name="fecha_inicio" maxlength="15" onpaste="return false"  placeholder="Fecha de inicio" class="form-control" required/>
                    </div>
                    <label style="color: white;">Fecha final</label>
                    <div >
                        <input type="date" name="fecha_final" maxlength="15" onpaste="return false"  placeholder="Fecha final" class="form-control" required/>
                    </div>
                    <div >
                        <input type="radio" name="activo" value="1" required> Activo<br>
  <input type="radio" name="activo" value="0"> No activo<br>
                    </div>
                </div>
                
                <div class="btn_submit">
                    <input type="submit" id="btn" name="btn" class="btn btn-primary" value="Insertar">
                </div>
                <div id="respuesta" style="display: none;"><?php
                    if (isset($mensaje)) {
                        echo "<script>alert('" . $mensaje . "');</script>";
                    }
                    //FIN! thanks for watching!
                    echo form_close();
                    ?></div>

            </div>
        </div>

                   <div class="container_12">
        <h1>Crud con codeigniter</h1>
        <div class="grid_12">
            <div class="grid_12" id="head">
                <div class="grid_2" id="head_nombre">Nombre</div>
                <div class="grid_2" id="head_email">Descripcion</div>
                <div class="grid_2" id="head_registro">Fecha_inicio</div>
                <div class="grid_2" id="head_registro">Fecha_final</div>
                <div class="grid_2" id="head_registro">Activo</div>
                <div class="grid_2" id="head_eliminar">Eliminar</div>
                <div class="grid_2" id="head_editar">Editar</div>
            </div>
            <?php
            foreach($users as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_2" id="nombre<?=$fila->id_cliente?>"><?=$fila->nombre?></div>
                <div class="grid_2" id="descripcion_cliente<?=$fila->id_cliente?>"><?=$fila->descripcion_cliente?></div>
                <div class="grid_2" id="fecha_inicio<?=$fila->id_cliente?>"><?=$fila->fecha_inicio?></div>
                <div class="grid_2" id="fecha_final<?=$fila->id_cliente?>"><?=$fila->fecha_final?></div>
                <div class="grid_2" id="activo<?=$fila->id_cliente?>"><?=$fila->activo?></div>
              
                <div class="grid_2" id="eliminar"><input type="button" value="Eliminar" id="<?=$fila->id_cliente?>" class="eliminar"></div>
                <div class="grid_2" id="editar"><input type="button" value="Editar" id="<?=$fila->id_cliente?>" class="editar"></div>
            </div>
            <?php 
            endforeach;
            ?>
            
        </div>
    </div>
        <?php
        // put your code here
        ?>


<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("plantilla/js/bootstrap.min.js"); ?>"></script>

</body>
</html>