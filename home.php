<?php get_header(); ?>    
  <div class="large-12 columns">
    <div class="row">
      <div class="large-1 columns">&emsp; </div>
      <div id="blog" class="large-10 columns">
      	<p class="page-title">Blog</p>
        <?php 
		global $query_string;
		query_posts( $query_string . '&cat=-2' );

        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			get_template_part('loop/loop', get_post_type() );
        endwhile; 
			pagination();
        endif; ?>
       </div>
	   <div class="large-1 columns">&emsp; </div>
	</div>
</div>
<?php get_footer(); ?>