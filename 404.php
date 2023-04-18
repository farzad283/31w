<?php
/**
 * Modele index.php représente le modéle par défault du thème
*/
?>

<?php get_header()?>
<main class="site__main">
    <!-- <code>404.php</code> -->
    <h1>Erreur 404 </h1>
    <h4>Page introuvable, vous pouvez tenter une recherche</h4>

    <?php get_search_form( 'searchform' ); ?>
    <label for="chkBurger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
        </label> 

</main>
<?php get_footer(); ?>
