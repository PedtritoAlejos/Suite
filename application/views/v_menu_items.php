

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <?php if($this->session->userdata('id_tipo_usuario')=='1')  { ?>
                    
                    <li>
                        <a href="index.html"><i class="glyphicon glyphicon-user"></i> Administrar usuarios</a>
                    </li>
                     <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Administrar servicios</a>
                    </li>
                     <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Administrar componentes</a>
                    </li>
                     <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Administrar muestras</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Mi Historial <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Historial otros  Usuarios</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Buscar historial usario</a>
                            </li>
                        </ul>
                    </li>
                    <li id="cliente" >
                        <a href="forms.html" ><i class="fa fa-fw fa-edit"></i> Agregar cliente</a>
                    </li>
                     <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Gestionar cliente</a>
                    </li>
                      <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Mensajes</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Alertas</a>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1'){ ?> 
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Administrar servicios</a>
                    </li>
                    <?php }elseif ($this->session->userdata('id_tipo_usuario')=='1') { ?>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Administrar componentes</a>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1') { ?>
                    <li class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Agregar cliente</a>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1') {?>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Administrar muestras</a>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1'){ ?>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Gestionar cliente</a>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1'){  ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Mi Historial <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Historial otros  Usuarios</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Buscar historial usario</a>
                            </li>
                        </ul>
                    </li>
                    <?php }elseif($this->session->userdata('id_tipo_usuario')=='1'){?>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Mensajes</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Alertas</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

  