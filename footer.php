</div>

<footer id="footer">
	<div class="row">
	    <div class="large-12 columns">
	      	© Cursos CRC, 2015 todos los derechos reservados.
	    </div>
    </div>
</footer>

 
    <script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
  <?php if( is_front_page() ): ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
  <?php endif; ?>
    <script>
      $(document).foundation();
      <?php 
      if( is_front_page() ): ?>
      $(document).ready(function(){
            $('.carousel-inner').slick({
              autoplay:true,
              fade:true
            });
      });
      <?php endif; ?>
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
