<?php
    $team_member_id = get_the_ID();
    $name = get_the_title();
    $position = get_field('position_title');
    //$bio_content = apply_filters( 'the_content', get_the_content() );
    $linkedin_profile_link = get_field('linkedin_profile_link');
?>

<?php if ( !$linkedin_profile_link ): ?>
    <div>
        <div class="team-member" data-aos="fade-up">
            <div class="team-member__photo">
                <?php the_post_thumbnail( 'full', array( 'class' => 'team-member__image' ) ); ?>
                <h3 class="team-member__name"><?= $name ?></h3>
            </div>
            <div class="team-member__bar"></div>
            <div class="arrow-link arrow-link--small arrow-link--team ">
                <?= $position ?> <div class="arrow-link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div>
        <a href="<?= $linkedin_profile_link ?>" target="_blank" class="team-member team-member--has-bio js-team-member a-bottom-in aos-init" data-modal-id="teammember<?= $team_member_id ?>" data-aos="fade-up">
            <div class="team-member__photo">
                <?php the_post_thumbnail( 'full', array( 'class' => 'team-member__image' ) ); ?>
                <h3 class="team-member__name"><?= $name ?></h3>
            </div>
            <div class="team-member__bar"></div>
            <div class="arrow-link arrow-link--small arrow-link--team ">
                <i class="fab fa-linkedin"></i>
                <?= $position ?> <div class="arrow-link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                    </svg>
                </div>
            </div>
        </a>
        <!-- <div class="team-member__modal js-modal-teammember<?= $team_member_id ?>">
            <button class="team-member__modal-close js-close-modal" data-modal-id='teammember<?= $team_member_id ?>'>
                Close
                <div class="team-member__modal-close-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 21 21" xml:space="preserve">
                        <style>
                            .st1 {
                                fill: none;
                                stroke: #00314c;
                                stroke-width: 2;
                                stroke-linecap: round;
                            }
                        </style>
                        <circle id="Oval" cx="10.5" cy="10.5" r="9.5" fill-rule="evenodd" clip-rule="evenodd" fill="#fff" stroke="#00314c" stroke-width="2" />
                        <g id="Group-12" transform="translate(6 6)">
                            <path id="Line" class="st1" d="M.3.3l8.4 8.4" />
                            <path id="Line_1_" class="st1" d="M8.7.3L.3 8.7" />
                        </g>
                    </svg>
                </div>
            </button>
            <div class="text-block team-member__modal-content">
                <div class="team-member team-member--modal">
                    <div class="team-member__photo">
                        <?php  the_post_thumbnail( 'full', array( 'class' => 'team-member__image' ) ); ?>
                        <h3 class="team-member__name"><?= $name ?></h3>
                    </div>
                    <div class="team-member__bar"></div>
                    <div class="arrow-link arrow-link--small arrow-link--team ">
                        <?= $position ?> <div class="arrow-link__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <?= $bio_content ?>
            </div>
        </div> -->
    </div>
<?php endif; ?>