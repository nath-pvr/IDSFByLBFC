<?php get_header(); ?>

<div class="container">

    <div class="row">

        <div id="formation" class="col-lg-8 mt-5">

            <?php $modules = get_terms(['taxonomy' => "modules"]);

            // var_dump($modules);

            $formEtat = array(
                'showposts'     => -1,
                'post_type'     => 'formation',
                'cat' => 3,
            );

            $formContinue = array(
                'showposts'     => -1,
                'post_type'     => 'formation',
                'cat' => 5,
            );

            $taxoSoCom = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 9,
                    )

                )
            );

            $taxoJanime = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 10,
                    )

                )
            );

            $taxoJentraine = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 11,
                    )

                )
            );

            $taxoArbitrage = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 12,
                    )

                )
            );

            $taxoJedirige = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 13,
                    )

                )
            );

            $taxoJeForme = array(
                'post_type'     => 'formation',
                'cat'           =>  6,
                'post_status'   => 'publish',
                'order'         => 'ASC',
                'orderby'       => 'ID',
                'relation'      => 'AND',
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'modules',
                        'field' => 'term_id',
                        'terms' => 14,
                    )

                )
            );

            $formComplementaire = array(
                'showposts'     => -1,
                'post_type'     => 'formation',
                'cat' => 7,
            );


            $myQuery_formEtat = new WP_Query($formEtat
            );
            
            $myQuery_formContinue = new WP_Query($formContinue
            );

            $myQuery_socleCom = new WP_Query($taxoSoCom);
            $myQuery_Janime = new WP_Query($taxoJanime);
            $myQuery_Jentraine = new WP_Query($taxoJentraine);
            $myQuery_Arbitrage = new WP_Query($taxoArbitrage);
            $myQuery_Jedirige = new WP_Query($taxoJedirige);
            $myQuery_Jeforme = new WP_Query($taxoJeForme);
            
            $myQuery_formComplementaire = new WP_Query(
                $formComplementaire
            );?>

            <h1>Découvrez nos Formations</h1>

            <h2 id="formEtat" class="mt-3 mb-3">Formations d'état</h2>

            <?php if ($myQuery_formEtat->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionFormEtat">

                    <?php while ($myQuery_formEtat->have_posts()) : $myQuery_formEtat->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h2 id="formFede" class="mt-3 mb-3">Formations Férales</h2>

            
            <p>Ces formations peuvent être effectuées selon deux méthodes:</p>

            <h3 id="formContinue" class="mt-3 mb-3">Formation Continue</h3>

            <?php if ($myQuery_formContinue->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionFormContinue">

                    <?php while ($myQuery_formContinue->have_posts()) : $myQuery_formContinue->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h3 id="formModulaire">Formation Modulaire</h3>
            
            <h4 id="SoCom" class="m-4">Socle Commun</h4>
            <?php if ($myQuery_socleCom->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionsocleCom">

                    <?php while ($myQuery_socleCom->have_posts()) : $myQuery_socleCom->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h4 id="anim" class="m-4">J'anime</h4>
            <?php if ($myQuery_Janime->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionJanime">

                    <?php while ($myQuery_Janime->have_posts()) : $myQuery_Janime->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h4 id="entraine" class="m-4">J'entraine</h4>
            <?php if ($myQuery_Jentraine->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionJentraine">

                    <?php while ($myQuery_Jentraine->have_posts()) : $myQuery_Jentraine->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h4 id="arbitrage" class="m-4">J'encadre l'arbitrage</h4>
            <?php if ($myQuery_Arbitrage->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionArbitrage">

                    <?php while ($myQuery_Arbitrage->have_posts()) : $myQuery_Arbitrage->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h4 id="dirige" class="m-4">Je dirige</h4>
            <?php if ($myQuery_Jedirige->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionJedirige">

                    <?php while ($myQuery_Jedirige->have_posts()) : $myQuery_Jedirige->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h4 id="forme" class="m-4">Je forme</h4>
            <?php if ($myQuery_Jeforme->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionJeforme">

                    <?php while ($myQuery_Jeforme->have_posts()) : $myQuery_Jeforme->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <h2 id="formComp" class="mt-3 mb-3">Formations Complémentaires</h2>

            <?php if ($myQuery_formComplementaire->have_posts()) : ?>

                <div class="accordion mb-5" id="accordionFormComp">

                    <?php while ($myQuery_formComplementaire->have_posts()) : $myQuery_formComplementaire->the_post(); ?>


                        <?php
                        get_template_part("includes/part", "accordions");
                        ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>


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