<?php get_header(); ?>

<div class="container">

    <div class="row">

        <?php

        $offrEmplois = array(
            'showposts'     => -1,
            'post_type'     => 'emplois',
            'cat'           => 28,
            'post_per_page' => 4,
        );

        $offrApprentissage = array(
            'showposts'     => -1,
            'post_type'     => 'emplois',
            'cat'           => 29,
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

        <div id="Emplois" class="col-lg-8 mt-5 mb-5">

            <h1>Emplois</h1>

            <h2 class="mt-3">Guide de l'emplois</h2>

            <!-- // TODO(nath): add link guide de l'emplois -->
            <p class="mt-3">pour télécharger le guide de l'emplois c'est par <a href="">ici</a>!!</p> 


            <h2 class="mt-3">Offres d'Emplois et d'apprentissage</h2>

            <h3 class="m-5">Offres d'Emplois</h3>

            <?php if ($myQuery_offrEmplois->have_posts()) : ?>

                <div id="cardOffrEmplois" class="card" style="width: 18rem;">


                    <?php while ($myQuery_offrEmplois->have_posts()) : $myQuery_offrEmplois->the_post();?>
                        <?php
                        get_template_part("includes/part", "card");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>
           
            <p class="mt-3">Plus d'offres d'emplois <a href="<?= home_url(); ?>/category/offre-emplois/">ici</a> !!</p>

            <h3 class="m-5">Offre d'Apprentissage</h3>

            <?php if ($myQuery_offrApprentissage->have_posts()) : ?>

                <div id="cardoffrApprentissage" class="card" style="width: 18rem;">


                    <?php while ($myQuery_offrApprentissage->have_posts()) : $myQuery_offrApprentissage->the_post(); ?>
                    <?php
                        get_template_part("includes/part", "card");
                        ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif ?>

                
            <p class="mt-3">Plus d'offres d'apprentissages <a href="<?= home_url(); ?>/category/offre-emplois/">ici</a> !!</p>

            <h2>Nos Formations ouvertes à l'apprentissage</h2>

            <?php
            get_template_part("includes/part", "formEtat");
            ?>
            
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