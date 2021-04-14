<?php $formEtat = array(
    'showposts'     => -1,
    'post_type'     => 'formation',
    'cat' => 3,
);

$myQuery_formEtat = new WP_Query($formEtat); ?>

<h2 id="formEtat" class="mt-3 mb-3 formEtat">Formations d'état</h2>

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