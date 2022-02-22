<?php
get_header();?>


<section id="content">
    <?php get_template_part('partials/block','title');?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('partials/block','column');?>
            <?php endwhile; ?>
        <?php endif; ?>

</section>
<?php get_footer();?>
