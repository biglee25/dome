<?php get_header(); ?>

<section class="section-container py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-9 text-center">
                <h5 class="text-white bg-dark text-uppercase p-3">
                        
                         <?php echo(the_title()); ?>
                                        
                </h5>
                <div class="mb-5">
                </div>

    
                    <?php 

                        if ( have_posts() ) { 
                            while ( have_posts() ) : the_post();
                        ?>
                            <?php the_content(); ?>
                        <?php
                            endwhile;
                        } 

                    ?> 
                <div class="pb-5">
                </div>
            </div>

                <?php get_sidebar('primary'); ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>


