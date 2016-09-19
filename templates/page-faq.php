<?php
    /* Template Name: FAQ */
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
                       <li><a class="smooth" href="#1">¿Sois una academia de formación?</a></li>
                       <li><a class="smooth" href="#2">¿Cómo recibo el certificado?</a></li>
                       <li><a class="smooth" href="#3">¿Lo enviáis a casa? ¿Cobramos algo?</a></li>
                       <li><a class="smooth" href="#4">¿Cómo se puede Pagar?</a></li>
                       <li><a class="smooth" href="#5">¿Es seguro el pago mediante tarjeta de crédito o mediante Paypal?</a></li>
                       <li><a class="smooth" href="#6">¿Cúal es vuestra cuenta bancaria?</a></li>
                       <li><a class="smooth" href="#7">¿EL Curso es el de alto riesgo y que sectores cubre?</a></li>
                       <li><a class="smooth" href="#8">¿EL Certificado y el carnet es valido para toda España? ¿Cuándo se tiene que renovar?</a></li>
                       <li><a class="smooth" href="#9">Tengo el carnet anterior al 2010 ¿Cuándo debo renovarlo?</a></li>
                       <li><a class="smooth" href="#10">¿Me enviáis también un carnet junto al certificado?</a></li>
                       <li><a class="smooth" href="#11">¿Existen precios especiales para grupos?</a></li>
                       <li><a class="smooth" href="12"<Politica de Cookies></a></li> 
                    </ul>
                </div>
                                <div id="manualimg" class="normalimg">
                    <img width="250" height="125" src="http://www.cursodemanipuladordealimentos.net/wp-content/uploads/2013/07/5.4.5-Frequently-Asked-Questions_03-e1373630993511.jpg" class="attachment-post-thumbnail wp-post-image" alt="5.4.5-Frequently-Asked-Questions_03">                </div>  
                                
            </div>

        </div>
    </div>        
</div>        
<?php get_footer(); ?>