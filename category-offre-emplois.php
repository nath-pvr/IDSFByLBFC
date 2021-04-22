<?php get_header(); ?>

<div class="container">
    <div class="row">
        
        <div id="offrEmplois" class="mb-5 col-lg-8 mt-5">

            <h1>Nos offres d'Emplois</h1>

            <?php

            $offremplois = array(
                'showposts'     => -1,
                'post_type'     => 'emplois',
                'cat'           => 28,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );


            $myQuery_emplois = new WP_Query($offremplois); ?>
            <div id="cardEmplois" class="col-lg-12 row">
                <?php if ($myQuery_emplois->have_posts()) :
                    while ($myQuery_emplois->have_posts()) : $myQuery_emplois->the_post(); ?>


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