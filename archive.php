<?php get_header(); ?>    
  <div class="large-12 columns">
    <div class="row">
      <div class="large-1 columns">&emsp; </div>
      <div class="large-10 columns">
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			get_template_part('loop/loop', get_post_type() );
        endwhile; endif; ?>
       </div>
	   <div class="large-1 columns">&emsp; </div>
	</div>
</div>
<?php get_footer(); ?>