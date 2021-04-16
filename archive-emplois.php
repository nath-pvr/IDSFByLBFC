<?php get_header(); ?>

<div class="container">

    <div class="row">

        <?php

        $offrEmplois = array(
            'showposts'     => -1,
            'post_type'     => 'emplois',
            'cat' => 28,
            'post_per_page' => 4,
        );

        $offrApprentissage = array(
            'showposts'     => -1,
            'post_type'     => 'emplois',
            'cat' => 29,
            'post_per_page' => 4,
        );

        $formations = array(
            'showposts'     => -1,
            'post_type'     => 'formation',
            'cat'           => 25
        );

        $myQuery_offrEmplois = new WP_Query(
            $offrEmplois); 

        $myQuery_offrApprentissage = new WP_Query(
            $offrApprentissage); 

        $myQuery_formations = new WP_Query(
            $formations); 
        ?>

        <div id="financement" class="col-lg-8 mt-5 mb-5">

            <h1>Emplois</h1>

            <h2>Guide de l'emplois</h2>

            // TODO(nath): add link guide de l'emplois
            <p>pour télécharger le guide de l'emplois c'est par<a href="">ici</a>!!</p> 


            <h2>Offres d'Emplois et d'apprentissage</h2>

            <h3>Offres d'Emplois</h3>

            <?php if ($myQuery_offrEmplois->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionoffrEmplois">


                    <?php while ($myQuery_offrEmplois->have_posts()) : $myQuery_offrEmplois->the_post(); ?>
                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>
            // TODO(nath): add link page offre-emplois
            <p>Plus d'offres d'emplois <a href="">ici</a> !!</p>

            <h3>Offre d'Apprentissage</h3>

            <?php if ($myQuery_offrApprentissage->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionoffrApprentissage">


                    <?php while ($myQuery_offrApprentissage->have_posts()) : $myQuery_offrApprentissage->the_post(); ?>
                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>

                // TODO(nath): add link page offre-apprentissage
            <p>Plus d'offres d'apprentissages <a href="">ici</a> !!</p>

            <h2>Nos Formations ouvertes à l'apprentissage</h2>

            <?php if ($myQuery_formations->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionformations">


                    <?php while ($myQuery_formations->have_posts()) : $myQuery_formations->the_post(); ?>
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