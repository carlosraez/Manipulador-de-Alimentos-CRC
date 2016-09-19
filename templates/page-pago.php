<?php
    /* Template Name: Pagina - Pago */
 get_header(); ?>    
<div class="large-12 columns">

    <div class="row">
        <div class="large-8 columns">
           <div class="wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
                <?php the_content(); ?>

            <?php endwhile; endif; ?>
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
                <div class="greenBtn normal redBtn" id="pagoBtn">
                    3 - Relizar el pago.
                </div>
                <i class="icon-arrow-down"></i>
                <div class="greenBtn normal" id="certificadoBtn">
                    4 - Obtienes tu certificado.
                </div>                
                             
            </div>

        </div>
    </div>        
</div>        
<?php 

get_footer(); ?>