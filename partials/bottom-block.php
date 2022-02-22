<div class="bottom-block">
    <div class="wrapper-container">
        <div class="contacts-bg">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="bb-left">
                        <?php if($bottom_text = get_field('bottom_text','options')):?>
                            <?php echo $bottom_text;?>
                        <?php endif;?>
                    </div><!--bb-left-->
                </div><!--col-sm-6-->
                <div class="col-sm-6">
                    <div class="contacts-form">
                        <?php echo do_shortcode('[contact-form-7 id="36" title="Контактная форма 1"]');?>
                    </div><!--contacts-form-->
                </div><!--col-sm-6-->
            </div><!--row-->
        </div><!--container-->
        </div>
    </div><!--div-->
</div><!--bottom-block-->
