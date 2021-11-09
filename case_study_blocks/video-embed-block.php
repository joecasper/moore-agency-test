<?php
    $vimeo_id = get_sub_field('vimeo_id');
?>

<div class="work-blocks__video" data-aos="fade-up">
    <div class="video-embed__embed">
        <iframe class="video-background" src="https://player.vimeo.com/video/<?= $vimeo_id ?>" width="640" height="360" frameborder="0" webkital lowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</div>