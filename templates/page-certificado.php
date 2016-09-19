<?php
    /* Template Name: Pagina - Certificado */


//parametros
$nombre = $_SESSION['nombre']; 
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
<p>el archivo de proteccion de datos es muy importante</p>
    
$currentDate = date("Y-m-d H:i:s");
if(isset($_SESSION['telefono'])) $telefono = $_SESSION['telefono'];
else $telefono = '0';

$method = '';
if(isset($_GET['paypal'])) $method = 'paypal';
if(isset($_GET['caixa'])) $method = 'caixa';
if(isset($_GET['transfer'])) $method = 'transferencia';
if(isset($_GET['yapagado'])) $method = 'Bono ó Pagado';
$nombre_examen = $_SESSION['nombre_examen'];


get_header();
if (  $method != '' ){

 ?>    

<div class="large-12 columns">

    <div class="row">
        <div class="large-8 columns">
           <div id="examen" class="wrap">



            <h2 id="certificado" class="half-title">4 - Obtienes tu certificado.</h2>

            <p class="alert-box success radius">¡¡ FELICITACIONES !! has obtenido tu certificado de manipulador de alimentos.</p>

            <p>Has obtenido el Certificado de manipulador de alimentos, tus datos serán verificados por nuestro personal y se pondrán en contacto contigo si hay alguna incidencia.</p>

            <p>La siguiente imagen es un ejemplo del certificado que recibirás en tu domicilio, este certificado es balido en todo el territorio español y esta aceptado por el ministerio de trabajo y todas las comunidades autónomas.</p>

           

            <p>
                <a href="http://www.cursodemanipuladordealimentos.net/wp-content/uploads/2013/07/EJEMPLO-CERTIFICADO.png"><img class="alignnone size-full wp-image-463" src="http://www.cursodemanipuladordealimentos.net/wp-content/uploads/2013/07/EJEMPLO-CERTIFICADO.png" alt="EJEMPLO CERTIFICADO" width="470" height="452" /></a>
            </p>

            <p>
                Para cualquier consulta no dudes en <a title="Puedes contactar con nosotros cuando quieras" href="<?php bloginfo( 'url' ); ?>/contacto/">ponerte en contacto con nosotros.</a>
            </p>



            </div>
        </div>
        <div class="large-4 columns">
            
            <div id="manualside">                   
                <h3 style="padding: 20px; text-align: center">
                    Obten tu certificado.<br />
                    En menos de 20 minutos y completamente Online.
                </h3>
                <div class="greenBtn normal" id="examBtn">                       
                    1 - Aprobar el examen.                          
                </div> 
                <i class="icon-arrow-down"></i>
                <div class="greenBtn normal"  id="datosBtn">
                    2 - Rellenar tus datos.
                </div>
                <i class="icon-arrow-down"></i>
                <div class="greenBtn normal" id="pagoBtn">
                    3 - Relizar el pago.
                </div>
                <i class="icon-arrow-down"></i>
                <div class="greenBtn normal redBtn" id="certificadoBtn">
                    4 - Obtienes tu certificado.
                </div>                
                             
            </div>

        </div>
    </div>        
</div>   

<?php    
    $tableName = 'wp_tabla_ventas';
    global $wpdb;
    $wpdb->insert(  $tableName , 
            array( 
                'nombre' => $nombre , 
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

} else {
    ?>
<div class="large-12 columns">

    <div class="row">
        <div class="large-12 columns">
            <br />
            <br />
            <br />
            <p class="alert-box warning radius">Lo sentimos, se ha producido un error en el pago</p>
            <br />
            <br />
            <br />

        </div>
    </div>
</div>
    <?php
}

    get_footer();


