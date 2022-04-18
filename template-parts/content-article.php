<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <?php the_tags('<span class="tag">
                <i class="fa fa-tag"></i></span>','<span class="tag"><i class="fa fa-tag"></i>') ?>
            <?php $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                        } ?>
            </span>
            <span class="comment">
                <a href="#comments"><i class='fa fa-comment'></i>
                    <?php
                echo get_comments_number();?></a>
                </span>
        </div>
    </header>
    <?php
    the_content();
    ?>

    <?php 
    comments_template();
    ?>
</div>