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
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url("index.php/c_usuario/index_usuario")?>">administrar usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulario
                            </li>
                        </ol>
                    </div>
                </div>
             
               
                <div class="row">
                    <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h1 class="panel-title text-right">Usuarios del sistema</h1>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <button type="button" class="btn  btn-primary btn-create"  data-toggle="modal" data-target="#modal_formulario"><span class="glyphicon glyphicon-user"></span> Crear usuario</button>
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
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Información</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo 
                                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, 
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec 
                                    pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                    rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede 
                                    mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat 
                                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat 
                                    a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                                    Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                                    ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
                                    condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
                                    sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero 
                                    venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus
                                    tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis
                                    magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</div>
			</div>
		</div>
      
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
            <div id="modal_formulario1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        
<!--      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Formulario</h4>
      </div>
      <div class="modal-body">
          
        <p></p>
      </div>
      <div class="modal-footer">
          <input type="hidden" id="run_usuario">
          
          <button type="button" class="btn btn-danger grupo1">Eliminar</button>
        <button type="button" class="btn btn-default grupo2" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-default grupo1"  data-dismiss="modal">Cancelar</button>
      </div>-->

    </div>

  </div>
</div>
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
           <form id="formulario">
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon1">Run</span>
                     <input type="text" class="form-control" id="run"  placeholder="Run usuario" aria-describedby="basic-addon1">
                     <span class="input-group-addon" id="basic-addon1">-</span>
                     <input type="text" class="form-control" id="dv_run" placeholder="k" aria-describedby="basic-addon1">
                </div>       
           
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Nombre</span>    
                <input type="text" class="form-control" id="nombre"  placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Apellido paterno</span>   
                <input type="text" class="form-control"  id="paterno" placeholder="Paterno.." aria-describedby="basic-addon2">
                </div>
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Apellido materno</span>    
               <input type="text" class="form-control" id="materno"  placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Correo</span>   
                 <input type="email" class="form-control"  id="correo"  placeholder="correo.." aria-describedby="basic-addon2">
                </div>
              <br>
               <div class="input-group">
               <span class="input-group-addon" id="basic-addon2">Contraseña</span>    
               <input type="password" id="clave" class="form-control"  placeholder="Ingrese.." aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">Tipo usuario</span>   
                <select class="form-control" id="tipo_usuario" >
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
                <button type="button"  class="btn btn-primary" onclick="validar_registro()">
                    Guardar registro
                </button>
                   
              
             </form>
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

