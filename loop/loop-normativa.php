<div class="row">
	<div class="large-12 columns">
		<?php if ( has_post_thumbnail() ) { ?><div class="large-4 columns mtop70"><?php the_post_thumbnail(); ?></div> <?php } ?>
	    <div class="large-8 columns">
	        <h3><?php the_title(); ?></h3>
	        <div class="text-content">
	            <?php the_content();?>
	        </div>
	    </div>
	</div>
</div>