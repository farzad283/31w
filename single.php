<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>

<main class="site__main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>   
</main> 
<?php get_footer(); ?>
