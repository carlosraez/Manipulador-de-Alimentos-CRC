<?php
/**
 * 	Template Name: Generar Certificado PDF
 *	HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
	ini_set('max_execution_time', 123456);
    // get the HTML
    ob_start();
    include(get_template_directory().'/inc/certificado.php');
    $content = ob_get_clean();


    // convert to PDF
    require_once(get_template_directory().'/inc/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('certificado.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
