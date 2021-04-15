<?php get_header(); ?>

<div class="container">
    <div class="row flex-row-reverse">
        <?php
        get_template_part("includes/part", "accesRap");
        ?>

        <div id="organigramme" class="mb-5 col-lg-8 mt-5">

            <h1>Organigramme</h1>

            <?php
            $conseilStrat = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 17,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            $coordoPeda = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 18,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            $coordoAdmin = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 19,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            $equipePeda = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 20,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            $respComite = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 21,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            $myQuery_conseilStrat = new WP_Query($conseilStrat);
            $myQuery_coordoPeda = new WP_Query($coordoPeda);
            $myQuery_coordoAdmin = new WP_Query($coordoAdmin);
            $myQuery_equipePeda = new WP_Query($equipePeda);
            $myQuery_respComite = new WP_Query($respComite); ?>
            <div id="conseilStrat" class="col-lg-12 row">

                <h2 class="m-5">Conseil Stratégique :</h2>
                <?php if ($myQuery_conseilStrat->have_posts()) :
                    while ($myQuery_conseilStrat->have_posts()) : $myQuery_conseilStrat->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                            <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

            <div id="coordoPeda" class="col-lg-12 row">

                <h2 class="m-5">Coordination Pédagogique :</h2>
                <?php if ($myQuery_coordoPeda->have_posts()) :
                    while ($myQuery_coordoPeda->have_posts()) : $myQuery_coordoPeda->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                            <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

            <div id="coordoAdmin" class="col-lg-12 row">

                <h2 class="m-5">Coordination Administrative :</h2>
                <?php if ($myQuery_coordoAdmin->have_posts()) :
                    while ($myQuery_coordoAdmin->have_posts()) : $myQuery_coordoAdmin->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                             <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

            <div id="equipePeda" class="col-lg-12 row">

                <h2 class="m-5">Équipe Pédagogique :</h2>
                <?php if ($myQuery_equipePeda->have_posts()) :
                    while ($myQuery_equipePeda->have_posts()) : $myQuery_equipePeda->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                            <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

            <div id="respComite" class="col-lg-12 row">

                <h2 class="m-5">Responsable M1 - M2 du TFP IV :</h2>
                <?php if ($myQuery_respComite->have_posts()) :
                    while ($myQuery_respComite->have_posts()) : $myQuery_respComite->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                            <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata() ?>
            </div>

        </div>
    </div>
</div>

<?php
get_template_part("includes/part", "featured");
?>

<?php get_footer(); ?>