<div class="team-container">
    <div class="row">
        <div class="offset-sm-1 col-sm-11">
            <?php if($team_subtitle = get_field('team_subtitle','options')):?>
                <div class="team-subtitle"><?php echo $team_subtitle;?></div>
            <?php endif;?>
            <?php if($team_title = get_field('team_title','options')):?>
                <div class="tt-title"><?php echo $team_title;?></div>
            <?php endif;?>
            <?php if($team_text = get_field('team_text','options')):?>
                <div class="team-text"><?php echo $team_text;?></div>
            <?php endif;?>
        </div>
    </div><!--row-->

    <?php
    $vmio = new WP_Query( array( 'post_type' => 'team', 'orderby'=>'date', 'posts_per_page' => -1) );

    if($vmio->have_posts()):
        ?>
        <div class="team-slider owl-carousel">
            <?php $i=0; while($vmio->have_posts()): $vmio->the_post();?>
                <div class="item">
                    <div class="team-single <?php $i++; if($i % 2 === 0):?><?php echo 'team-even'?> <?php endif;?>" >
                        <?php if($photo = get_field('foto')):?>
                            <a href="<?php echo get_the_permalink();?>" class="ts-image">
                                <img src="<?php echo $photo['sizes']['team-thumb'];?>" alt="<?php echo $photo['title'];?>" class="img-fluid">
                            </a><!--ts-image-->
                        <?php endif;?>
                        <div class="ts-content">
                            <div>
                                <a href="<?php echo get_the_permalink();?>"  class="ts-name">
                                    <?php the_title();?>
                                </a>
                            </div>
                            <?php if($job = get_field('job')):?>
                                <a href="<?php echo get_the_permalink();?>" class="ts-job"><?php echo $job;?></a>
                            <?php endif;?>
                            <?php if($facebook = get_field('facebook')):?>

                                <div class="ts-socials">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a>
                                            <?php if($twitter = get_field('twitter')):?>
                                                <a href="<?php echo $facebook;?>"><i class="fa fa-twitter"></i></a>
                                            <?php endif;?>
                                            <?php if($instagram = get_field('instagram')):?>
                                                <a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="<?php echo get_the_permalink();?>"><i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            <?php endif;?>
                        </div><!--ts-content-->
                    </div><!--team-single-->
                </div>

            <?php  endwhile;?>
        </div>
    <?php  endif;?>
</div>
