<?php
/**
 * Template Name: full-width
 */
?>

<?php get_header(); ?>

<section class="section-container py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-dark text-uppercase">
                    
                <?php echo(the_title()); ?> 
                
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <?php 

                    if ( have_posts() ) { 
                        while ( have_posts() ) : the_post();
                    ?>
                        <?php the_content(); ?>
                    <?php
                        endwhile;
                    } 

                ?> 

            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>


