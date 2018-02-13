<?php get_header() ?>

<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="logo-container">
               <h1>THE LOGO</h1> 
            </div>
            <p class="lead">
                <a href="#"><i class="fa fa-angle-down"></i></a>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div  class="col-md-8 offset-md-2">

        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php the_content(); ?>


        <?php endwhile; endif; ?>


         </div>
        </div>
    </div>
</div>


<?php get_footer() ?>