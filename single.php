<?php get_header();?>
<div class="main-wrapper">
<article class="">

    <?php 
    if(have_posts() ){

        while(have_posts()){

            the_post();
            the_title();
            get_template_part('template-parts/content','article');
        }
    }
    ?>
</article>

<?php get_footer();?>