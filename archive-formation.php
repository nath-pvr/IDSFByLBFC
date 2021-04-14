<?php get_header(); ?>

<div class="container">

    <div class="row">

        <div id="formation" class="col-lg-8 mt-5">

            <h1>Découvrez nos Formations</h1>



            <?php
            get_template_part("includes/part", "formEtat");
            ?>

            <?php
            get_template_part("includes/part", "formFede");
            ?>

            <?php
            get_template_part("includes/part", "formComp");
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