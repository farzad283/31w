<?php
/**
 * Modele index.php représente le modéle par défault du thème
*/
?>

<?php get_header()?>
<main>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while( have_posts()) : the_post();
        the_title('<h1>','</h1>');
    endwhile;
endif;
?>
</main>
<?php get_footer(); ?>