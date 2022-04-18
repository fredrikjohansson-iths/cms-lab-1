<?php get_header();?><?php /* Template Name: Front Page */ ?>
<?php
    if ( is_page() ) : the_post(); ?>
<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php get_bloginfo( 'name' ); ?> </h1>
    </header>
    <article class="content px-3 py-5 p-md-5">
        <div class='container'>
            <?php the_content();
            ?>
            </div>
    </article>
    <?php get_footer(); ?>
    <?php
    endif;
    wp_reset_query();
    ?>