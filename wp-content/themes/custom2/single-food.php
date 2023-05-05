<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        
        <?php get_template_part('content', get_post_format()) ?>
        
    <?php endwhile; ?>

<?php endif; ?>
<div>
        <?php previous_post_link();?> &nbsp; <?php next_post_link()?>
    </div>

<?php get_footer() ?>