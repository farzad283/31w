<?php
/**
 * Modele index.php représente le modéle par défault du thème
*/
?>

<?php get_header()?>

<main>
    <h3>front-page.php</h3>
    <h3>index.php</h3>
    <section class="blocflex">
    <?php 
    if (have_posts()):
        while( have_posts()) : the_post();
            //the_title('<h1>','</h1>');
            //the_permalink();?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?= get_the_title() ?></a></h3>

                //the_content();
                //the_excerpt();
                <p><?php echo wp_trim_words(get_the_excerpt(), 4);?></p>
            </article>
            <?php endwhile;?>
            <?php endif;?>
</section>

</main>
<?php get_footer(); ?>