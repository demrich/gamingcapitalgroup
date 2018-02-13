<?php get_header() ?>
<div id="page">
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div>
               <h1><?php the_title() ?></h1>
            </div>

        </div>
    </div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-12">

    <div class="row">
        <div class="col-md-8 offset-md-2">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p>
        <?php the_content(); ?>
        </p>

        <?php endwhile; endif; ?>


        </div>
    </div>
</div>
</div>
</div>

<?php get_footer() ?>
