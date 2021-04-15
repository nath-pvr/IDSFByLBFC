<?php get_header(); ?>

<div class="container">
    <div class="row flex-row-reverse">
        <?php
        get_template_part("includes/part", "accesRap");
        ?>

        <div id="organigramme" class="mb-5 col-lg-8 mt-5">

            <h1>Nos lieux de formation</h1>

            <?php
            $lieuForm = array(
                'showposts'     => -1,
                'post_type'     => 'idsf',
                'cat'           => 23,
                'order'         => 'ASC',
                'orderby'       => 'ID'
            );

            

            $myQuery_lieuForm = new WP_Query($lieuForm);?>

            <div id="lieuForm" class="col-lg-12 row">

                <?php if ($myQuery_lieuForm->have_posts()) :
                    while ($myQuery_lieuForm->have_posts()) : $myQuery_lieuForm->the_post();
                ?>
                        <div class=" mt-3 ms-3 col-3">

                            <div class="card">
                            <?= the_post_thumbnail('card-header', ['class' => 'card-img-top']) 
                                    ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= the_title() ?></h5>
                                    <p><?=the_content()?></p>
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