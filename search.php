<?php get_header(); ?>

<div class="container vh-100">

    <div class="row">

        <div id="search" class="col-lg-8 mt-5">

            <h1>Résultats de votre recherche :</h1>

            <div id="cardsearch" class="card" style="width: 18rem;">
                <?php
                get_template_part("includes/part", "card");
                ?>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>