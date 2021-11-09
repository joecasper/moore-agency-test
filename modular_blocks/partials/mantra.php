<?php
    $delay = 0;

    if ( $counter == 2 ) { 
        $delay = 200;
    } elseif ( $counter == 3 ) {
        $delay = 400;
    }
?>
<div class="mantra" data-aos="fade-up" data-aos-delay="200">
    <h3 class="mantra__headline">
        <?= the_title() ?>
    </h3>
    <div class="mantra__content">
        <div class="mantra__pattern"></div>
        <p class="mantra__copy">
            <?= the_content() ?>
        </p>
    </div>
</div>
<?php
    if ( $counter == 3 ) {
        $counter = 0;
    }
?>