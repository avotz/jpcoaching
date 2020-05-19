<?php 
    /*
    Template Name: Page Home
     */

get_header(); ?>

	<section class="banner">
        <div class="cycle-slideshow" 
                    data-cycle-fx="fade"
                    data-cycle-timeout="4000"
                    data-cycle-slides=".banner__slide"
                    >
                    <!-- empty element for pager links -->
                    <div class="cycle-pager banner__pager"></div>

                    <div class="banner__slide" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" alt="Banner" />
                    </div>
                     <div class="banner__slide" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/banner2.jpg" alt="Banner" />
                    </div>
                    <div class="banner__slide" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/banner3.jpg" alt="Banner" />
                    </div>
                    <div class="banner__slide" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/banner4.jpg" alt="Banner" />
                    </div>
                
                    
                </div>       
       
    </section>

	<section id="about" class="about">
        <?php rewind_posts(); ?>
        <?php query_posts( 'post_type=page&page_id=24' ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'one-page' ); ?>
        
                    <?php endwhile; ?>
                    <!-- post navigation -->
                  
                <?php endif; ?>
    </section>
    <section id="team" class="team">
    <?php rewind_posts(); ?>
    <?php query_posts( 'post_type=page&page_id=27' ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'one-page' ); ?>
    
                <?php endwhile; ?>
                <!-- post navigation -->
              
            <?php endif; ?>
        
    </section>
     <section id="services" class="services">
        <div class="inner">
                <?php rewind_posts(); ?>
            <?php query_posts( 'post_type=page&page_id=30' ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'one-page' ); ?>

                <?php endwhile; ?>
                <!-- post navigation -->
            
            <?php endif; ?>
        </div>
       
    </section>
             <section id="clients" class="clients">
                   <?php rewind_posts(); ?>
                    <?php query_posts( 'post_type=page&page_id=36' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/content', 'one-page' ); ?>

                        <?php endwhile; ?>
                        <!-- post navigation -->
                      
                    <?php endif; ?>
            </section>
             <section id="contact" class="contact">
                <?php rewind_posts(); ?>
                        <?php query_posts( 'post_type=page&page_id=15' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'one-page' ); ?>

                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
            </section>
<?php get_footer(); ?>
