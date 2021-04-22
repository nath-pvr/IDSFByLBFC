<?php get_header(); ?>

<div class="container">
    <div class="row">
        

        <div id="offrApprentissage" class="mb-5 col-lg-8 mt-5">

            <h1>Nos offres d'apprentissages</h1>

            <?php

            $offrApprentissage = array(
                'showposts'     => -1,
                'post_type'     => 'emplois',
                'cat'           => 29,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );
            

            $myQuery_apprentissage = new WP_Query($offrApprentissage);?>          
            

            <div id="cardApprentissage" class="col-lg-12 row">

                <?php if ($myQuery_apprentissage->have_posts()) :
                    while ($myQuery_apprentissage->have_posts()) : $myQuery_apprentissage->the_post();
                ?>
                         <?php
                        get_template_part("includes/part", "card");
                        ?>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

        </div>
        <?php
        get_template_part("includes/part", "accesRap");
        ?>
    </div>
</div>

<?php
get_template_part("includes/part", "featured");
?>

<?php get_footer(); ?>