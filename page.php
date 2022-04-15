<?php get_header();?><?php /* Template Name: Page */ ?>
<?php
    if ( is_page() ) : the_post(); ?>
<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"> <?php
    the_title();
    ?></h1>
    </header>
    <article class="about-section content px-3 py-5 p-md-5">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </article>

    <?php
    endif;
    wp_reset_query();
    ?>