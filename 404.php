<?php get_header(); ?>

<main class="site__errour" >
    <!-- <code>404.php</code> -->
    <h1>Erreur 404 </h1>
    <h4>Page introuvable, vous pouvez tenter une recherche</h4>

    <?php get_search_form( 'searchform' ); ?>
    <label for="chkBurger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
        </label> 

    <h5>Nos choix de cours</h5>
    <?php 
        $cours = get_queried_object();
        if (isset($cours))
        {
            $lemenu = $cours->slug;
        }else{
            $lemenu = "cours";
        }

        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
    )); ?>

    <h5>Les notes de cours</h5>
    <?php 
        $category = get_queried_object();
        if (isset($category))
        {
            $lemenu = $category->slug;
        }else{
            $lemenu = "note-wp";
        }

        wp_nav_menu(array(
            "menu" => $lemenu,
            "container" => "nav"
    )); ?>

</main>

<?php get_footer(); ?>
