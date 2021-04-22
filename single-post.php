<?php get_header() ?>
<div class="container">
    <div class="row">

        <div class="col-lg-8 mt-5">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h1><?= the_title() ?></h1>
                    <p><?= the_content() ?></p>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
    <?php
    get_template_part("includes/part", "accesRap");
    ?>
</div>

<?php
get_template_part("includes/part", "featured");
?>

<?php get_footer() ?>