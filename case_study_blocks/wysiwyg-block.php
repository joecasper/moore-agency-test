<?php
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
?>

<section class="centered-block">
    <h2 class="centered-block__headline">
        <?= $heading ?>
    </h2>
    <div class="text-block">
        <?= $content ?>
    </div>
</section>