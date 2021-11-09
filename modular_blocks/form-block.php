<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
    $form = get_sub_field('form');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="main-padding nav-padding" data-aos="fade-up">
    <h2 class="headline"><?= $heading ?></h2>
    <div class="text-block border-brand-gray-600 border-b pb-2 mb-6">
        <?= $content ?>
    </div>
    <style>
        .gform_validation_container {
            visibility: hidden!important;
        }
    </style>
    <?php gravity_form($form['id'], false, true, false, '', true, 1); ?>
    <!-- <form action="" class="contact-form">
        <div class="contact-form__body">
            <label class="form-element">
                <span class="form-element__text">Name:*</span>
                <input type="text" class="form-element__text-input">
            </label>
            <label class="form-element">
                <span class="form-element__text">Organization Name:*</span>
                <input type="text" class="form-element__text-input">
            </label>
            <label class="form-element">
                <span class="form-element__text">Email Address:*</span>
                <input type="text" class="form-element__text-input">
            </label>
            <label class="form-element">
                <span class="form-element__text">Phone Number:*</span>
                <input type="text" class="form-element__text-input">
            </label>
            <label class="form-element col-span-2">
                <span class="form-element__text">Project Details:*</span>
                <textarea name="" id="" rows="10" class="form-element__text-input"></textarea>
            </label>
            <label class="form-element">
                <span class="form-element__text">Known Projected Budget?</span>
                <input type="text" class="form-element__text-input">
            </label>
            <label class="form-element">
                <span class="form-element__text">Known Projected Timeline?</span>
                <input type="text" class="form-element__text-input">
            </label>
        </div>
        <div class="flex justify-center">
            <input type="submit" class="button" value="Contact Us Now">
        </div>
    </form> -->
</section>