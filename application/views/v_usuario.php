<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Administración de  Usuarios
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?= base_url("index.php/c_usuario/index_usuario") ?>">administrar usuarios</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Formulario
                    </li>
                </ol>
            </div>
        </div>


        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Agregar usuario</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nuevo Usuario</h3>
                        </div>
                        <?php echo form_open(base_url("index.php/c_usuario/insertar_usuario")); ?>
                        <div class="panel-body">
                            
                            <!-- -->
                       <!-- -->
                            
                            
                            
                            <div class="container col-md-6">
                                <div class="form-group">
                                    <label>Ingrese el run del usuario</label>
                                    <?php echo form_error('run','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Run</span>
                                        <input type="number"  min="1" maxlength="10" class="form-control" required="true" name="run"  placeholder="Run usuario" aria-describedby="basic-addon1">
                                        <span class="input-group-addon" id="basic-addon1">-</span>

                                        <select name="dv" class="form-control" aria-describedby="basic-addon1">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>k</option>
                                        </select>
                                    </div>       

                                </div>
                                <div class="form-group">
                                    <label>Ingrese el nombre del usuario</label>
                                    <input required="true" name="nombre" class="form-control">
                                     <?php echo form_error('nombre','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Ingrese la clave del usuario</label>
                                    <input required="true" type="password"  name="clave" class="form-control">
                                     <?php echo form_error('clave','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                                </div>




                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Ingrese el apellido paterno</label>
                                    <input required="true" name="paterno" class="form-control">
                                     <?php echo form_error('paterno','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Ingrese el apellido materno</label>
                                    <input required="true" name="materno" class="form-control">
                                     <?php echo form_error('materno','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Ingrese el correo del usuario</label>
                                    <input required="true" type="email" name="correo" class="form-control">
                                     <?php echo form_error('correo','<div class="alert alert-danger alert-dismissible"  role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
                            
                                </div>
                                <div class="form-group">
                                    <label>Seleccione un tipo de usuario</label>
                                    <select class="form-control" required="true" name="tipo_usuario" >
                                        <option value="" required="true">Seleccione</option>
                                        <?php
                                        foreach ($lista as $value) {
                                            echo "<option value='" . $value->id_tipo_usuario . "'>" . $value->nombre . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                          </div>
                       <?php 
                            if(isset($mensaje)){
                               
                                echo $mensaje;
                               
                            }
                            ?>
                     
                        <div class="panel-footer"> <button type="submit" class="btn btn-primary">Agregar Registro</button> </div>
                            
                    </div>
                            <?php echo form_close(); ?>
                </div>
            </div>
        </div>                            


    </div>

    <div class="row ">
        <div class="panel panel-default panel-table ">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h1 class="panel-title text-right">Usuarios del sistema</h1>
                    </div>
                    

                </div>
            </div>
            <div class="table-responsive">          
                <div class="panel-body">
                    <div class="col-md-12">

                        <table id="tbl_usuarios" class="table  table-bordered table-hover" cellspacing="0">
                            <thead >
                                <tr>
                                    <th>Acción</th>
                                    <th>Run</th>
                                    <th>Dv-run</th>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Correo</th>
                                    <th>Contraseña</th>
                                    <th>Activo</th>
                                    <th>Perfil</th>




                                </tr>
                            </thead>
                        </table> 

                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="row">

                </div>
            </div>           

        </div>
    </div>




    <style>
        .row{
            margin-top:40px;
            padding: 0 10px;
        }

        .clickable{
            cursor: pointer;   
        }

        .panel-heading span {
            margin-top: -20px;
            font-size: 15px;
        }
    </style>
    <div class="row">


        <div id="modaldelete" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Mensaje</h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="run_usuario">

                        <button type="button" class="btn btn-danger grupo1" onclick="eliminar_usuario()">Eliminar</button>
                        <button type="button" class="btn btn-default grupo2" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-default grupo1"  data-dismiss="modal">Cancelar</button>
                    </div>
                </div>

            </div>
        </div>

        
           

        <div id="modalmensaje" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Mensaje</h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="run_usuario">


                        <button type="button" class="btn btn-default grupo2" id="btnmensaje" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--  ventana modal para modificar los datos del usuario--->
    <form id="form_update">
          <div class="modal fade" id="modal_formulario" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   Agregar usuario
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
          
                <div class="input-group">
                     <span class="input-group-addon"  id="basic-addon1">Run</span>
                     <input type="number" class="form-control" id="run"  maxlength="10" required="true" placeholder="Run usuario" aria-describedby="basic-addon1">
                     <span class="input-group-addon" id="basic-addon1">-</span>
                     <input type="text" class="form-control" maxlength="1"  id="dv_run" required="true" placeholder="k" aria-describedby="basic-addon1">
                </div>       
           
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Nombre</span>    
                <input type="text" class="form-control" id="nombre"  required="true" placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Apellido paterno</span>   
                <input type="text" class="form-control"  id="paterno" required="true" placeholder="Paterno.." aria-describedby="basic-addon2">
                </div>
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Apellido materno</span>    
               <input type="text" class="form-control" id="materno"  required="true" placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Correo</span>   
                 <input type="email" class="form-control"  id="correo"  required="true" placeholder="correo.." aria-describedby="basic-addon2">
                </div>
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Contraseña</span>    
               <input type="password" id="clave" class="form-control" required="true"  placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Tipo usuario</span>   
                <select class="form-control" required="true" id="tipo_usuario" >
                     <option value="" required="true">Seleccione</option>
                                     <?php 
                                       foreach ($lista as $value) {
                                       echo "<option value='".$value->id_tipo_usuario."'>".$value->nombre."</option>";
                                }  
                                   ?>
                </select>
               
                </div>
                  
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cerrar
                </button>
                <input type="submit" class="btn btn-primary"  value="Guardar registro"/>
               
                   
              
            
            </div>
            
        </div>
    </div>
</div>
    <!-- -->
    </form>
        
</div>