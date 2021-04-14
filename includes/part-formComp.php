<?php

$formComplementaire = array(
    'showposts'     => -1,
    'post_type'     => 'formation',
    'cat' => 7,
);

$myQuery_formComplementaire = new WP_Query(
    $formComplementaire
); ?>

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