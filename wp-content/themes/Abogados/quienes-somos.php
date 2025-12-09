<?php
/*
* Template Name: quienes somos
*/
 
get_header();






?>
 

    <main class="quienes-somos-page">
        <?php while ( have_posts() ) : the_post(); ?>
 
        <div class=" container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-12 pb-md-5 pb-3 text-center">
                         <h1>  <?php the_title(); ?>  </h1>
                    </div>
                    <div class="col-11 col-lg-12">
                           <?php the_content(); ?>
                    </div>
 
                </div>
 
            </div>
        </div>
         <?php endwhile;?>
 

         <?php get_footer(); ?>
    </main>
 