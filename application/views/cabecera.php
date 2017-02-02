<!DOCTYPE html>
<html lang="en">

<head>
<?php 
if($this->session->userdata('id_tipo_usuario')){
    
}
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("plantilla/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("plantilla/css/sb-admin.css") ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url("plantilla/css/plugins/morris.css") ?>" rel="stylesheet">
   
    <link href="<?php  echo base_url("plantilla/datatables/media/css/jquery.dataTables.min.css") ?>" rel="stylesheet">

    <!-- Custom Fonts -->
   
    <link href="<?php echo base_url("plantilla/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("plantilla/datatables/media/css/tablaPersonalizado.css"); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url("plantilla/js_functions/js_cliente.js")?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};

</script>
 <script >
var base_url ;
        base_url= '<?php echo base_url()?>';
</script>

</head>