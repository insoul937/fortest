<?php if($button_text = get_field('button_text','options')):?>
    <div class="book-container">
        <div class="container">
            <a href="#popup" class="btn btn-book"><?php echo $button_text;?></a>
        </div>
    </div>
<?php endif;?>
