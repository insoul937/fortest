<?php get_header();?>
    <section id="content" class="mb-50px">
        <?php get_template_part('partials/block','title');?>
        <div class="wrapper-container futured-news">
            <div class="container">
                <?php
                $vmio = new WP_Query( array('post_type'=>'news','posts_per_page' => 3) );

                if($vmio->have_posts()):
                ?>
                <div class="row">
                    <?php while($vmio->have_posts()): $vmio->the_post();?>
                        <?php get_template_part('partials/block','news');?>
                    <?php endwhile; ?>
                </div>
                <?php endif;?>
                <?php wp_reset_postdata();?>
            </div><!--container-->
        </div><!--wrapper-container-->
        <div class="all-news">

                <?php
                if(have_posts()):
                    ?>
                        <?php while(have_posts()):the_post();?>
                            <?php get_template_part('partials/block-single','news');?>
                        <?php endwhile; ?>

                <?php endif;?>
            </div><!--container-->
    </section><!--content-->
<?php get_footer(); ?>
