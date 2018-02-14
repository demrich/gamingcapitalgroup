<?php get_header() ?>
<div id="page">
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url('<?php echo $url ?>') no-repeat; background-size:cover;" />
        <div class="container">
            <div>
               <h1 id="start"><?php the_title() ?></h1>
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
