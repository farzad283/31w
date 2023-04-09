<?php
/*
Nom du modèle: Modèle d'article de blog
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php
                    printf(
                        esc_html__( 'Publié le %s par %s', 'blog' ),
                        esc_html( get_the_date() ),
                        esc_html( get_the_author() )
                    );
                    ?>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
            
            <footer class="entry-footer">
                <div class="entry-meta">
                    <?php
                    $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'séparateur de la liste des éléments', 'college' ) );
                    if ( $tags_list ) {
                        printf(
                            '<span class="tags-links">' . esc_html__( 'Étiquettes : %1$s', 'college' ) . '</span>',
                            $tags_list
                        );
                    }
                    ?>
                </div><!-- .entry-meta -->
                <?php get_sidebar(); ?>
            </footer><!-- .entry-footer -->
        </article><!-- #post-<?php the_ID(); ?> -->
        

        <article class="blocflex__article">
            <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
            <h6><?= $titre_long ?></h6>
            <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            <p><?php the_field('blog');?></p>
            <p><?= $duree ?></p>
        </article>
        
    <?php endwhile; ?>

</main><!-- #main -->

<?php get_footer(); ?>
