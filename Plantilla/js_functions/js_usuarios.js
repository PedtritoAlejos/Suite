
$('#tbl_usuarios').dataTable({
    'paging':true,
    'info':false,
    'filter':true,
    'stateSave':true,
    'ajax':{
        'url':base_url+'index.php/c_usuario/get_usuarios_todos',
        'type':'POST',
        dataSrc:''
    },
    'columns':
    [
         {'orderable':true,
        render:function(data,type,row)
            {
                return  "\n\
                    <div class='btn-group'> \n\
                            <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown' \n\
                            aria-haspopup='true' aria-expanded='false'> \n\
                              Opción <span class='caret'></span> \n\
                            </button> \n\
                                <ul class='dropdown-menu'> \n\
                                    <li><a href='#'>Action</a></li> \n\
                                    <li><a href='#'>Another action</a></li> \n\
                                    <li><a href='#'>Something else here</a></li> \n\
                                    <li role='separator' class='divider'></li> \n\
                                    <li><a href='#'>Separated link</a></li> \n\
                                </ul> \n\
                    </div>";
            }
        },
        {data:'run_usuario'},
        {data:'nombre'},
        {data:'correo'},
        {data:'contrasenha'},
        {data:'Activo'},
        {data:'id_tipo_usuario'}
       
    ],
    'order':[[0,"asc"]]
});

