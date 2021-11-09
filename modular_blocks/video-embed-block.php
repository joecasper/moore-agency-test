<?php
    $anchor_id = get_sub_field('anchor_id');
    $vimeo_id = get_sub_field('vimeo_id');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="video-embed main-padding main-bottom-margin" data-aos="fade-up">
    <div class="video-embed__embed">
        <iframe class="video-background" src="https://player.vimeo.com/video/<?= $vimeo_id ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
</section>