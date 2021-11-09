<?php
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
?>

<div class="work-intro__content" data-aos="fade-up" data-aos-delay="300">
    <div class="work-intro__left">
        <h3 class="work-intro__headline">
            <?= $heading ?>
        </h3>
        <div class="text-block">
            <?= $content ?>
        </div>
    </div>
</div>