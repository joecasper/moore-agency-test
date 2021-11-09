<figure class="client-quotes__slide">
    <blockquote class="client-quotes__quote">
        <?= the_content() ?>
    </blockquote>
    <figcaption class="client-quotes__attribution">
        <p class="client-quotes__person">
            <?= the_title() ?>, <?= the_field('position_title') ?>
        </p>
        <p class="client-quotes__organization">
            <?= the_field('company') ?>
        </p>
    </figcaption>
</figure>