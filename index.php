<?php get_header() ?>
<div id="homepage">
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="logo-container">
                THE LOGO
            </div>
            <p class="lead">
                <a href="#">&hearts;!</a>
            </p>
        </div>
    </div>
    </div>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1><?php the_title(); ?></h1>

    <div class="row">
        <div class="col-md-8">
        <ul> 
            <li>
                <?php wp_list_pages(); ?>
            </li>
        </ul>

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