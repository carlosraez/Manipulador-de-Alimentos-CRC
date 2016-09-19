<?php

$order = $_GET['order'];
global $wpdb;    
$tableName = 'wp_tabla_ventas';

$ordercomp = $wpdb->get_row("SELECT * FROM `$tableName` WHERE `order` = '$order' ");

$DNI = esc_html($ordercomp->dni );
$nombre = esc_html($ordercomp->nombre );
?><style type="text/css">
<!--
#container{height:400px;width:400px;position:relative;}
#image{position:absolute;left:0;top:0;height: 742px;width: 1090px;}
#text{z-index:100;position:absolute;    float: left;left: 50px;top: 85px;height: 570px;width: 920px;margin: 0px 35px;}
#logo { width: 920px; height: 100px; margin: auto; text-align: center; float: left; margin-top: 15px;  }
#logo img{width: 100px; height: 100px; }
#titulo1 { width: 920px; height: 35px; margin: auto; text-align: center; float: left; margin-top: 20px; font-size: 35px;font-family: Times; font-weight: bold; color:#998700; }
#titulo2 { width: 920px; height: 18px; margin: auto; text-align: center; float: left; margin-top: 10px; font-size: 18px;font-family: Times; font-weight: bold; color:#0d0d0d; }
#titulo3 { width: 920px; height: 28px; margin: auto; text-align: center; float: left; margin-top: 10px; font-size: 28px;font-family: Times; font-weight: bold; color:#0d0d0d; }
#titulo4 { width: 750px; height: 130px; margin: auto; text-align: center; float: left; margin-top: 10px; font-size: 15px;font-family: Times; font-weight: normal; color:#998700; line-height: 1.5; }
#titulo5 { width: 460px; height: 15px; position: absolute; bottom: 15px; left: 0; margin: auto; text-align: center; float: left; font-size: 14px;}
#titulo6 { width: 460px; height: 100px; position: absolute; bottom: 15px; right: 0; margin: auto; text-align: center; float: left; font-size: 14px;}
#titulo6 img{width: 200px; }
-->
</style>

<page class="page" orientation="paysage" style="font-size: 18px">
<div id="container">
    <img id="image" src="./wp-content/themes/crc_cursos2/inc/img/bg.jpg"/>
    <div id="text">
        <div id="logo"><img src="./wp-content/themes/crc_cursos2/inc/img/logo.jpg"/></div>
        <div id="titulo1">CERTIFICADO DE MANIPULADOR DE ALIMENTOS</div>
        <div id="titulo2">CONCEDIDO A</div>
        <div id="titulo3"><?php print $nombre; ?> DNI: <?php print $DNI; ?></div>
        <div id="titulo4">Por haber superado satisfactoriamente la prueba para la obtención del certificado de Manipulador de alimentos de Alto Riesgo y por lo tanto posee la formación necesaria para el desempeño de las labores propias de un manipulador de alimentos. Así mismo su nombre pasará a formar parte de la base de datos de nuestra academia.</div>
        <div id="titulo5">Concedido el día <?php print date( 'j') . ' de ' . date('F') . ', ' . date('Y'); ?></div>
        <div id="titulo6"><img src="./wp-content/themes/crc_cursos2/inc/img/firma.jpg"/> <br /><br /> Director de la Academia de Formación.</div>

    </div>
</div>
</page>