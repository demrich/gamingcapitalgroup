<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/df09a2f94d.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

        <?php
        wp_register_style( $handle, $src, $deps, $ver, $media );
        ?>

    <title> <?php wp_title(''); ?> </title>

    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>

<div id="wrapper">
<div id="main">
<?php if (is_home()) { ?>
    <div id="homepage">
<?php } ?>
    <header> 

    <div class="logo">
        <a href="<?php echo home_url(); ?>">
    Logo Section
</a>
    </div>

    <nav>
        <?php 
        $args= array (
            'theme_location' => 'primary'
        );
        ?>
<?php wp_nav_menu( $args ); ?>
    </nav>

    </header>
    
