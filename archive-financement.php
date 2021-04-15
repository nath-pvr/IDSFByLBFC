<?php get_header(); ?>

<div class="container">

    <div class="row">

        <?php

        $professionalisation = array(
            'showposts'     => -1,
            'post_type'     => 'financement',
            'cat' => 24,
        );

        $apprentissage = array(
            'showposts'     => -1,
            'post_type'     => 'financement',
            'cat' => 25,
        );

        $aides = array(
            'showposts'     => -1,
            'post_type'     => 'financement',
            'cat' => 26,
        );

        $myQuery_professionalisation = new WP_Query(
            $professionalisation); 

        $myQuery_apprentissage = new WP_Query(
            $apprentissage); 

        $myQuery_aides = new WP_Query(
            $aides); 
        ?>

        <div id="financement" class="col-lg-8 mt-5 mb-5">

            <h1>Financement</h1>

            <h2>Professionalisation</h2>

            <?php if ($myQuery_professionalisation->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionProf">


                    <?php while ($myQuery_professionalisation->have_posts()) : $myQuery_professionalisation->the_post(); ?>
                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>

            <h2>Apprentissage</h2>

            <?php if ($myQuery_apprentissage->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionApprentissage">


                    <?php while ($myQuery_apprentissage->have_posts()) : $myQuery_apprentissage->the_post(); ?>
                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>

            <h2>Aides</h2>

            <?php if ($myQuery_aides->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionAides">


                    <?php while ($myQuery_aides->have_posts()) : $myQuery_aides->the_post(); ?>
                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>
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