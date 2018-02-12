<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

        <?php
        wp_register_style( $handle, $src, $deps, $ver, $media );
        ?>

    <title> <?php wp_title(''); ?> </title>

    <?php wp_head(); ?>
</head>
<body>
    <header> 

    <div class="logo">
    Logo Section
    </div>

    <nav>
    <ul>
        <li class="first">
        <a href="#">About</a>
        </li>
        <li>
        <a href="#">Contact</a>
        </li>
        <li class="last">
        <a href="#">Github</a>
        </li>
    </ul>
    </nav>

    </header>
    
