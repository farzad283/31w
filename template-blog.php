<?php
/**
 * Template name: Blog
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail( 'large' ); ?>

<h1><?= get_the_title(); ?></h1>
<?php the_content();?>

<p>La date  de le blog : <?php the_field('date'); ?></p> 
<p>Nom de bloger : <?php the_field('nom-blog'); ?></p>  
<p>Courriel : <?php the_field('courriel'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();