<?php
    /* Template Name: Pagina - Pago completado */
 get_header(); ?>    
<div class="large-12 columns">

    <div class="row">
        <div class="large-12 columns">
           <div class="wrap">

           <?php
$tableName = 'wp_tabla_ventas';
 $order = '';
if(isset($_GET['ordern'])) $order = $_GET['ordern'];
if(isset($_SESSION['caixaorder']))$order = $_SESSION['caixaorder'];

if( $order == '' ) die('Error'); 

global $wpdb;    
$ordercomp = $wpdb->get_row("SELECT * FROM `$tableName` WHERE `order` = '$order' ");
if($ordercomp != null){
    
    
    echo "<div class='alert alert-info alert-block' style='margin-top:20px;'> 
            ¡ FELIZIDADES TU PEDIDO SE HA COMPLETADO  !<br/> 
            <br/>
            <p>
            Puede descargarse su certificado desde aquí: <br/>
            <a target='_blank' href='http://www.cursodemanipuladordealimentos.net/descargar-certificado/?order=".esc_html($ordercomp->order)."'> 
            <strong>DESCARGAR CERTIFICADO</strong> </a> 
            </p>

            <p>
            A continuacion te mostramos los datos de tu pedido, un email sera enviado a la direccion de 
            correo que nos has indicado con los datos de tu compra. <br /><br />
            Nombre y apellidos : ".esc_html($ordercomp->nombre )." <br/>
            Email : ".esc_html($ordercomp->email)." <br/>
            Direccion : ".esc_html($ordercomp->direccion)." <br/>
            Poblacion : ".esc_html($ordercomp->poblacion)." <br/>
            Provincia: ".esc_html($ordercomp->comunidad )." <br/>
            Codigo Postal : ".esc_html($ordercomp->codpost)."<br/><br/>
            Nº DE PEDIDO : ".esc_html($ordercomp->order)." <br/>
            IMPORTE : ".esc_html(intval($ordercomp->importe)/100)."€ </p>
    </div>" ; 
 
    $wpdb->update(  $tableName , 
        array(  
            'nombre' => $ordercomp->nombre , 
            'email' =>  $ordercomp->email, 
            'telefono' =>  $ordercomp->telefono, 
            'direccion' => $ordercomp->direccion , 
            'poblacion' =>  $ordercomp->poblacion , 
            'comunidad' => $ordercomp->comunidad , 
            'codpost' => $ordercomp->codpost , 
            'order' =>  $ordercomp->order , 
            'importe' => $ordercomp->importe , 
            'timestamp' => $ordercomp->timestamp , 
            'confirmado' =>  1,
            'referer' => $_SERVER["HTTP_REFERER"],
            'metodo' => $ordercomp->metodo,
            'nombre_examen' => $ordercomp->nombre_examen
            ), 
        array('id'=> $ordercomp->id),
        array( '%s','%s','%s','%s','%s','%s','%s','%s','%d','%s','%d', '%s','%s','%s'),
        array('%d') 
    );
    
    $texto = "¡ Te agradecemos la confianza en CRC CURSOS !  <br/>

            Puede descargarse su certificado entrando en la siguiente dirección: <br/>
            www.cursodemanipuladordealimentos.net/descargar-certificado/?order=".esc_html($ordercomp->order)." 
            <br/>
            A continuacion te mostramos los datos de tu pedido. 
            Nombre y apellidos : ".esc_html($ordercomp->nombre )."
            Email : ".esc_html($ordercomp->email)." <br/>
            Direccion : ".esc_html($ordercomp->direccion)." 
            Poblacion : ".esc_html($ordercomp->poblacion)." 
            Provincia: ".esc_html($ordercomp->comunidad )." 
            Codigo Postal : ".esc_html($ordercomp->codpost)."
            Nº DE PEDIDO : ".esc_html($ordercomp->order)." 
            IMPORTE : ".esc_html(intval($ordercomp->importe)/100)."€  
            

            Para cualquier consulta no dudes en ponerte en contacto con nosotros en ".get_bloginfo('admin_email').".";

    mail($ordercomp->email, 'Tu pedido Cursos CRC', $texto);
}else if(isset($_GET['norelease']) && isset($_SESSION['email'])){
        //parametros
        $nombre = $_SESSION['nombre']; 
        $email = $_SESSION['dni']; 
        $email = $_SESSION['email']; 
        $direccion = $_SESSION['direccion'];
        $poblacion = $_SESSION['poblacion'];
        $comunidad = $_SESSION['comunidad'];
        $codpost = $_SESSION['codpost'];
        $order = $_SESSION['caixaorder'];
        $importe = $_SESSION['importe'];
        if(isset($atts['precio']))
            $importe = intval($atts['precio']);
        else if( $importe==0 && isset($_GET['importe']) )
            $importe = intval($_GET['importe']);

            
        $currentDate = date("Y-m-d H:i:s");
        if(isset($_SESSION['telefono'])) $telefono = $_SESSION['telefono'];
        else $telefono = '0';
        if(isset($_GET['paypal'])) $method = 'paypal';
        if(isset($_GET['caixa'])) $method = 'caixa';
        if(isset($_GET['transfer'])) $method = 'transferencia';
        if(isset($_GET['yapagado'])) $method = 'Bono ó Pagado';
        $nombre_examen = $_SESSION['nombre_examen'];




        $tableName = 'wp_tabla_ventas';
        global $wpdb;
        $wpdb->insert(  $tableName , 
                array( 
                    'nombre' => $nombre , 
                    'dni' =>  $dni, 
                    'email' =>  $email, 
                    'telefono' =>  $telefono, 
                    'direccion' => $direccion , 
                    'poblacion' =>  $poblacion , 
                    'comunidad' => $comunidad , 
                    'codpost' => $codpost , 
                    'order' =>  $order , 
                    'importe' => $importe , 
                    'timestamp' => $currentDate , 
                    'confirmado' =>  0,
                    'metodo' => $method,
                    'nombre_examen' => $nombre_examen
                    ), 
                array( '%s','%s','%s','%s','%s','%s','%s','%s','%d','%s','%d','%s', '%s') 
        );

    echo "<div class='alert alert-info alert-block' style='margin-top:20px;'> ¡ FELIZIDADES TU PEDIDO SE HA COMPLETADO  !  <br/>
            A continuacion te mostramos los datos de tu pedido, un email sera enviado a la direccion de 
            correo que nos has indicado con los datos de tu compra. <br /><br />
            Nombre y apellidos : ".esc_html($nombre )." <br/>
            Email : ".esc_html($email)." <br/>
            Direccion : ".esc_html($direccion)." <br/>
            Poblacion : ".esc_html($poblacion)." <br/>
            Provincia: ".esc_html($comunidad )." <br/>
            Codigo Postal : ".esc_html($codpost)."<br/><br/>
            Nº DE PEDIDO : ".esc_html($order)." <br/>
            IMPORTE : ".esc_html(intval($importe)/100)."€ 
    </div>" ; 
}

session_unset();
session_destroy();

/*

            <div class="alert-box success radius">
                <p><b>¡¡ Has completado tu pedido !!</b> para obtener el/los certificados deberás seguir los próximos pasos.</p>
                <p>1 - <a title="Resumen manual manipulador de alimentos" href="http://www.cursodemanipuladordealimentos.net/curso-manipulador-de-alimentos/">Leer el Manual del Manipulador de alimentos</a>.</p>
                <p>2 - <a title="Examen Certificado manipulador de Alimentos" href="http://www.cursodemanipuladordealimentos.net/certificado-manipulador-alimentos/">Superar el examen</a>  y rellenar los datos para el certificado al terminar el examen.</p>
            </div>

            <p>
                La siguiente imagen es un ejemplo del certificado que recibirás en tu domicilio, este certificado es balido en todo el territorio español y esta aceptado por el ministerio de trabajo y todas las comunidades autónomas.
            </p>

            <p>
                <a href="http://www.cursodemanipuladordealimentos.net/wp-content/uploads/2013/07/certificado.jpg">
                    <img class="alignnone  wp-image-168" alt="certificado" src="http://www.cursodemanipuladordealimentos.net/wp-content/uploads/2013/07/certificado.jpg" width="516" height="369" />
                </a>
            </p>

            <p>
                Para cualquier consulta no dudes en <a title="Puedes contactar con nosotros cuando quieras" href="http://www.cursodemanipuladordealimentos.net/contacto/">ponerte en contacto con nosotros.</a>
            </p>

*/ ?>

            </div>
        </div>
     </div>        
</div>        
<?php
get_footer(); ?>