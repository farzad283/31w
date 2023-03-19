<?php
//template footer.php
?>
<footer class="site__footer">
    <h5>Pied de page</h5>
    <?php wp_nav_menu(array(
                    'menu'  => 'footer',
                    'container' => 'nav'
                )); ?> 
</footer>
<?php wp_footer(); ?>
</body>
</html>