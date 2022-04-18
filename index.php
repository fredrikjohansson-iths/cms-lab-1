<?php get_header();?>
<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading">Blog</h1>
    </header>
    <article class="content px-3 py-5 p-md-5">

        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                    get_template_part('template-parts/content','archive');
                }
            }
            ?>
    </article>

    <?php get_footer();?>