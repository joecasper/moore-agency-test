<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="hero">
            <h1 class="hero__title">
                <div class="hero__title-text" itemprop="name">
                    <span>Work</span>
                </div>
                <div class="hero__title-text hero__title-text--white" itemprop="name">
                    <span>Work</span>
                </div>
            </h1>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'hero__image', 'itemprop' => 'image' ) ); } ?>
            <div class="hero__bar"></div>
        </header>
        <section class="work-blocks main-padding">
            <h2 class="work-intro__title" data-aos="fade-right"><?= the_title() ?></h2>
            
            <!-- Modular Content Blocks -->
            <?php include( 'case_study_blocks/_master.php' ); ?>
        </section>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>