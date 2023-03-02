<?php
/**
   Modele index.php représente le modéle par défault du thème
*/
?>

<?php get_header()?>

<main class="site__main">
    <h3>front-page.php</h3>
    <h3>index.php</h3>
    <section class="blocflex">
    <?php 
    if (have_posts()):
        while( have_posts()) : the_post(); ?>
            <?php get_template_part("template_parts/categorie", "note-wp");?>
        <?php endwhile;?>
    <?php endif;?>
</section>
</main>
<?php get_footer(); ?>