<?php get_header(); ?>

<?php $socialfeed = false; ?>

<section class="page-content">
	<!--Yoast Breadcrumb-->
    <?php
    get_template_part('templates/content/page', 'breadcrumb');
    ?>
    <div class="container">
		<?php if( ! $socialfeed ) : ?>
			<style>
                .socialfeedrow {
                    margin: 0 auto;
                }
                @media only screen and (min-width: 544px) {
                    .socialfeedrow {
                        max-width: 576px;
                    }
                }
                @media only screen and (min-width: 768px) {
                    .socialfeedrow {
                        max-width: 720px;
                    }
                }
                .entry-image {
                    text-align: center;
                    margin-bottom: 0!important;
                }
			</style>
		<?php endif; ?>

        <div class="row socialfeedrow">

            <div class="<?php echo $socialfeed ? 'col-md-8' : 'col-md-12';?> col-xs-12">

                <?php 
                if( have_posts() ) : 
                while ( have_posts() ) : the_post(); 

                $credit = get_post_meta($post->ID, 'image_credit', true);
                $creditURL = get_post_meta($post->ID, 'image_credit_url', true);

                get_template_part('templates/content/blog', 'single'); 

                endwhile; 
                endif; 
                ?>                
                
                <h2>Related Posts</h2>
                
                <div class="row">
                    
                    <?php     
                    $custom_cats = get_the_terms( $id, 'categories' );
                    if($custom_cats != "" || $custom_cats != null) :
                        foreach ($custom_cats as $cat) {
                            $slug = $cat->slug;
                        }
                    endif;
                    $args = array(
                        'post_type' => 'addlib',
                        'posts_per_page' => 2,
                        'categories' => $slug,
                        'post__not_in' => array( get_the_ID() )
                    );
                    query_posts( $args ); ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                    
                    <div class="col-md-6">
                        <article class="post-entry">
                            <div class="panel-border">
                                
                                <div class="entry-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'blog-image' ); ?>
                                    </a>
                                </div>

                                <div class="entry-title">

                                    <h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                </div>

                                <div class="entry-content">
                                    <?php the_excerpt(); ?>

                                </div>

                            </div>
                            
                        </article>
                        
                    </div>
                        
                    <?php endwhile; ?>
                    
                </div>

            </div>

			<?php if( $socialfeed ) : ?>
            <div class="col-md-4 col-xs-12">

                <aside class="sidebar">

                    <div class="social-feed-container">

                    </div>

                </aside>

            </div>
			<?php endif; ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>