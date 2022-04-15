<?php
if ( have_posts()) : 
    while (have_posts()) : the_post(); ?>
<main id="<?php the_ID(); ?>" class="<?php post_class(); ?>">
<?php
the_title('<h3>', '</h3>');
the_content('<p>','</p>');
the_author('<strong>', '</strong>');
?>
</main>
<?php endwhile;
endif;?>