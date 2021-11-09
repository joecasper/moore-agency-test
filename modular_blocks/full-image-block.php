<?php
    $anchor_id = get_sub_field('anchor_id');
    $image = get_sub_field('image');
?>

<img <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="work-blocks__image">
