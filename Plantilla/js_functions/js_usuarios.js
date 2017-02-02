var table;

    $(document).ready(function (){
        $('#tbl_usuarios2').dataTable({
    'language':{
        'url':'https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
    },
    'paging':true,
    'info':true,
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
                return "<div class='btn-group'> \n\
                            <button type='button' class='btn btn-primary'>Opción</button> \n\
                            <button type='button' class='btn btn-primary dropdown-toggle'\n\
                        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>\n\
                              <span class='caret'></span>\n\
                              <span class='sr-only'>Toggle Dropdown</span>\n\
                            </button>\n\
                            <ul class='dropdown-menu'>\n\
                                <li><a href='#'><span class='glyphicon glyphicon-edit'></span> Modificar</a></li>\n\
                                <li><a href='#' onclick='delete_user("+row.run_usuario+",\x22"+row.nombre+"\x22 ,\x22"+row.apellido_paterno+"\x22)'><span class='glyphicon glyphicon-trash'></span> Eliminar</a></li>\n\
                                </ul>\n\
                      </div>";
            }
        },
        {data:'run_usuario'},
        {data:'dv_run'},
        {data:'nombre'},
        {data:'apellido_paterno'},
        {data:'apellido_materno'},
        {data:'correo'},
        {data:'contrasenha'},
        {data:'Activo'},
        {data:'id_tipo_usuario'}
       
    ],
    'columnDefs':[
           
            {
            'mRender':function(data,type,row){
                return row.run_usuario+"-"+row.dv_run;
            },'targets':[1]
            },
            {
            'mRender':function(data,type,row){
                return row.nombre+" "+row.apellido_paterno+" "+row.apellido_materno;
            },'targets':[3]
            }
            ,
            {
            'mRender':function(data,type,row){
               if(data==1){
                   return "si";
               }
               return "no";
            },'targets':[8]
            },
            {
            'mRender':function(data,type,row){
               if(data==1){
                   return "Administrador";
               }else if (data==2){
               return "Operador";
           }
            },'targets':[9]
            }
           
            
            ]

    ,
    'order':[[0,"asc"]]
});
 table = $('#tbl_usuarios').DataTable();
 
table.columns( [2,4,5]).visible( false, false );

});

 

    
  


function delete_user(run ,nombre ,apellido){
   $('.grupo2').hide();
   $('.grupo1').show();
   $('#run_usuario').val(run);
   $('#modaldelete .modal-body p').text('Quieres eliminar al usuario '+nombre+' '+apellido);
   $('#modaldelete').modal('show');
  
 
}



function eliminar_usuario()
            {
                $.ajax({
                    type: "POST",
                    async: false,
                    dataType: "json",
                    data: {
                        id: $('#run_usuario').val()
//                        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
                    },
                    url: base_url+'index.php/c_usuario/eliminar_usuario',
                    success: function(data)
                    {
//                        $(".grupo2").show();
//                        $(".grupo1").hide();
                        if(data.status == "success")
                        {
                            $(".grupo1").hide();
                            $(".grupo2").show();
                            $('#modaldelete .modal-body p').text("El usuario ha sido eliminado correctamente");
                           table.ajax.reload();
                        }
                        else
                        {
                            $('#modaldelete .modal-body p').text("Ha ocurrido un error eliminando al usuario");
                        }
                    }
                });
            }
            
            
            
            
    //efecto toggle en el panel de información        
$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
});
