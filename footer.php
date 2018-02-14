</div>
</div>

<?php wp_footer(); ?>
<footer>
<div class="container">
<nav class="footer-nav">
<?php 
        $args= array (
            'theme_location' => 'footer'
        );
        ?>
<?php wp_nav_menu( $args ); ?>

</nav>
</footer>
</div>
</body>
</html>