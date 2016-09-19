<?php 
    /* Template Name: Pagina - Normativa */

get_header(); ?>    
  <div class="large-12 columns">
    <div class="row">
      <div class="large-1 columns">&emsp; </div>
      <div id="blog" class="large-10 columns">
      	<p class="page-title"><?php the_title( ); ?></p>
        <?php 
		global $query_string;
		query_posts( 'post_type=post&post_per_page=-1&cat=2' );

        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			get_template_part('loop/loop', 'normativa' );
        endwhile; 
			pagination();
        endif; ?>
       </div>
	   <div class="large-1 columns">&emsp; </div>
	</div>
</div>
<?php get_footer(); ?>