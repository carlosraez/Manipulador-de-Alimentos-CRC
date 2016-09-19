<?php get_header(); ?>    
<div class="large-12 columns">

    <div class="row">
        <div class="large-9 columns">
           <div class="wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="page-title"><?php the_title(); ?></h2>


                <?php the_content(); ?>

            <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="large-3 columns">
            <?php get_sidebar(); ?>
        </div>
    </div>        
</div>        
<?php get_footer(); ?>