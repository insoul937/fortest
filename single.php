<?php

get_header();?>
<?php the_post();?>
<section id="content">
    <?php get_template_part('partials/block','title');?>
    <div class="wrapper-container content-page">
        <div class="container"  >
            <?php the_content();?>
        </div><!--container-->
    </div>
</section>
<?php get_footer();?>
