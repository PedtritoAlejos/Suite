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
                    <h3 class="panel-title text-right">Usuarios del sistema</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create">Crear usuario</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                  <div class="col-md-12">
                  <div class="table-responsive">
                <table id="tbl_usuarios" class="table  table-bordered table-hover" cellspacing="0">
                    <thead >
                            <tr>
                                <th>Acción</th>
                                <th>Run</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Activo</th>
                                <th>Tipo usuario</th>
                                
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
         
        </div>

