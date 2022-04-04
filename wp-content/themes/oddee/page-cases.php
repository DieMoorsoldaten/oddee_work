<?php get_header(); ?>

<div class="fix-wrapper">
    <div class="container-fluid page-cases">
        <div class="container">

            <?php 
                wp_nav_menu( array(
                    'menu'  => 'cases-menu',
                    'container'       => false,
                    'menu_class'      => 'navbar-nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu'
                ));
            ?>
            <div>
                <?php
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category'    => 10,
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
                        <div class="main-cases-btn px-3 px-md-0">
                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                            <?php the_content(); ?>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <div class="page-cases-wrapper">

                <div data-tab="menu-item-390" class="cases">
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 41,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div data-tab="menu-item-384" class="cases">
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 33,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div data-tab="menu-item-385" class="cases">
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 34,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div data-tab="menu-item-388" class="cases">
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 36,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div data-tab="menu-item-386" class="cases">
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 37,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div data-tab="menu-item-387" class="cases" >
                    <div class="page-cases-fix">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 38,
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
                                    
                                    <div class="main-cases-block">

                                        <?php edit_post_link(null, '<span class="dashicons dashicons-edit-large">', '</span>'); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="cases-img-wrapper mb-2">
                                                <figure>
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="cases-hover">
                                                    <h3>
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <p class="cases-hover-descr2">
                                                        <?php if(!empty(the_field('main_descr2'))){
                                                                the_field('main_descr');
                                                            }
                                                        ?>
                                                    </p>
                                                    <p class="cases-hover-descr">
                                                        <?php if(!empty(the_field('main_descr'))){
                                                                the_field('main_descr'); 
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class= mb-1>
                                                <?php the_title(); ?>
                                            </h4>
                                            <p class="main-cases-descr">
                                                <?php the_field('main_descr'); ?>
                                            </p>
                                        </a>
                                    </div>
                                
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
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

<?php get_footer(); ?>