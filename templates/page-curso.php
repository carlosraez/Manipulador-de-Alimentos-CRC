<?php
    /* Template Name: Pagina - Info Curso */
 get_header(); ?>    
<div class="large-12 columns">

    <div class="row">
        <div class="large-8 columns">
           <div class="wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="page-title"><?php the_title(); ?></h2>


                <?php the_content(); ?>

            <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="large-4 columns">
            

            <div id="manualside" class="stikyelement ">
               <h3 style="padding-left: 20px">Indice</h3>
               <div>
                  <ul id="menuNavigation">
                     <li><a class="smooth" href="#1">1. INTRODUCCIÓN AL CURSO DE MANIPULADOR DE ALIMENTOS POR EDITADO POR CURSOS CRC</a></li>
                     <li><a class="smooth" href="#2">2. ¿QUE OBJETIVOS VAMOS A TENER EN ESTE CURSO?</a></li>
                     <li><a class="smooth" href="#3">3. CON LA CONTAMINACIÓN DE LOS ALIMENTOS HAY QUE TENER CUIDADO</a></li>
                     <li><a class="smooth" href="#4">4. ¿QUE BACTERIAS CONTAMINAN LOS ALIMENTOS y CUALES DEBEMOS CONOCER?</a></li>
                     <li><a class="smooth" href="#5">5. MOHOS Y PARÁSITOS(TENGAMOSLO EN CUENTA)</a></li>
                     <li><a class="smooth" href="#6">6. HIGIENE PERSONAL(ESPECIAL CUIDAD)</a></li>
                     <li><a class="smooth" href="#7">7. MANIPULACIÓN y COCINADO DE ALIMENTOS</a></li>
                     <li><a class="smooth" href="#8">8. PLAN DE LIMPIEZA Y DE DESINFECCIÓN DEL LOCAL</a></li>
                     <li><a class="smooth" href="#9">9. PLAN DE DESINSECTACIÓN Y DESRATIZACIÓN</a></li>
                     <li><a class="smooth" href="#10">10. AUTOCONTROLES QUE HAY QUE REALIZAR PERIODICAMENTE. ANÁLISIS DE PELIGROS Y PUNTOS CRÍTICOS DE CONTROL (APPCC)</a></li>
                  </ul>
               </div>
               <div class="greenBtn redBtn">                       
                  <a href="http://www.cursodemanipuladordealimentos.net/certificado-manipulador-alimentos/">
                  <i class="icon-ok"></i> ¡Hacer el Examen!</a>       
<?php get_footer(); ?>