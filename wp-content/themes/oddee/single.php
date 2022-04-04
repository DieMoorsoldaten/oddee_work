<?php get_header(); ?>

<div class="fix-wrapper">
    <div class="container-fluid single-case">
        <div class="container">
            <div>
                <?php the_content(); ?>
            </div>
            <div>
            <?php
                $my_posts = get_posts( array(
                    'numberposts' => 1,
                    'category'    => 19,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post ); ?>
                    <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                        <div class="main-client-descr">
                            <?php the_content(); ?>
                        </div>
                    <?php
                }

                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>