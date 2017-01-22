
   <script src="<?php echo base_url("plantilla/js/jquery.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("plantilla/js/bootstrap.min.js"); ?>"></script>
   
    <script src="<?php echo base_url("plantilla/datatables/media/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("plantilla/js_functions/js_usuarios.js"); ?>"></script>
 
<script>
var url=document.URL;

switch (url.toString()) {
    case 'http://localhost/Proyecto/index.php/c_crud/iniciar_sesion':
   $('#cliente').addClass('active');
        break;
    case 'http://localhost/Proyecto/index.php/c_usuario/index_usuario':
        $('#usuario').addClass('active');
    break;
    default:
        
        break;
}
</script>
</body>

</html>
