<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer__footer-logo footer-logo">
                    <a href="/" class="footer-logo__link">
                       ЗМК<br/><span>Cемёновский</span>
                    </a>
                </div>
                <?php if($phones = get_field('phones','options')):?>
                    <div class="footer__footer-phones footer-phones">
                        <div class="footer-phones__icon"><i class="fa fa-phone"></i></div>
                        <div class="footer-phones__container">
                        <?php foreach ($phones as $phone):?>
                            <div class="footer-phones__single"><a class="footer-phones__single-link" href="tel:<?php echo $phone['phone_in'];?>"><?php echo $phone['phone_out'];?></a></div>
                        <?php endforeach;?>
                        </div>
                    </div>
                <?php endif;?>
                <?php if($email = get_field('email','options')):?>
                    <div class="footer__email ">
                        <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                    </div>
                <?php endif;?>
                <div class="footer__footer-socials footer-socials">
                    <?php if($facebook = get_field('facebook','options')):?>
                        <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></div>
                    <?php endif;?>
                    <?php if($whatsapp = get_field('whatsapp','options')):?>
                        <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $whatsapp;?>" target="_blank"><div class="icon-whatsapp"></div></a></div>
                    <?php endif;?>
                    <?php if($telegram = get_field('telegram','options')):?>
                        <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $telegram;?>" target="_blank"><div class="icon-telegram"></div></a></div>
                    <?php endif;?>
                </div><!--footer-socials-->
            </div><!--col-sm-3-->
            <div class="col-sm-3">
                <div class="footer__footer-menu footer-menu">
                    <?php dynamic_sidebar( 'footer_sidebar_first' ); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer__footer-menu footer-menu">
                    <?php dynamic_sidebar( 'footer_sidebar_second' ); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <?php if($nashi_adresa = get_field('nashi_adresa','options')):?>
                    <div class="footer__address-container address-container">
                        <div class="address-container__title">Наши адреса</div>
                        <?php foreach($nashi_adresa as $na):?>
                            <div class="address-container__single">
                                <div class="address-container__single-title"><?php echo $na['name'];?></div>
                                <div class="address-container__single-text"><?php echo $na['adress'];?></div>
                                <div class="address-container__single-time"><?php echo $na['work_date'];?></div>
                            </div><!--address-container-single-->
                        <?php endforeach;?>
                    </div><!--address-container-->
                <?php endif;?>
                <div class="footer___contact-information contact-information">
                    <?php if($inn = get_field('inn','options')):?>
                        <div class="contact-information__text">ИНН <?php echo $inn;?></div>
                    <?php endif;?>
                    <?php if($kpp = get_field('kpp','options')):?>
                        <div class="contact-information__text">КПП <?php echo $kpp;?></div>
                    <?php endif;?>
                    <?php if($ogrn = get_field('ogrn','options')):?>
                        <div class="contact-information__text">ОГРН <?php echo $ogrn;?></div>
                    <?php endif;?>
                </div><!--contact-information-->
            </div><!--col-sm-3-->
        </div><!--row-->
        <div class="footer__bottom">
            <div class="row">
                <div class="col-sm-6">
                    <?php if($copyright = get_field('copyright','options')):?>
                        <div class="footer__bottom-copyright">
                            <?php echo $copyright;?>
                        </div><!--footer__bottom-copyright-->
                    <?php endif;?>
                </div><!--col-sm-6-->
                <div class="col-sm-6">
                    <div class="footer__footer-menu footer-menu">
                        <div class="footer-menu__right">
                            <?php dynamic_sidebar( 'footer_sidebar_third' ); ?>
                        </div>
                    </div>
                </div><!--col-sm-6-->
            </div><!--row-->
        </div><!--footer__bottom-->
    </div><!--container-->
</footer><!--footer-->
<?php wp_footer(); ?>
</body>

</html>
