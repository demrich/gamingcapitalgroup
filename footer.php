<?php wp_footer(); ?>
<footer>
<nav class="footer-nav">
<?php 
        $args= array (
            'theme_location' => 'footer'
        );
        ?>
<?php wp_nav_menu( $args ); ?>

</nav>
</footer>
</body>
</html>