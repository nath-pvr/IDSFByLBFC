<?php

get_header() ?>



<div class="container">

    <div class="row flex-row-reverse">

        <h2 class="mt-5">Présentation</h2>

        <?php
        get_template_part("includes/part", "accesRap");
        ?>

        <div class="col-lg-8 mt-5 mb-5">

           
            <h3><?= the_title() ?></h3>

            <div class="mt-3 col-lg-12  col-sm-12 ms-auto ">
                <div class="row d-flex align-items-center g-0">
                    <div class="col-lg-7 offset-1 d-flex flex-column justify-content-center">
                        <div class="my-auto">
                            <div class="card-text"><?= the_content() ?></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
get_template_part("includes/part", "featured");
?>


<?php get_footer() ?>