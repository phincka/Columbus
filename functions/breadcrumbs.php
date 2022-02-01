<?php
/*=============================================
=            BREADCRUMBS			            =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {
    $stepIcon = '<span class="stepIcon"></span>';

    // Start the breadcrumb with a link to your homepage
    echo '<ul class="breadcrumbs txt-12">';


    if (is_tax('trips-category')) {
        $term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy") );
        $tmpTerm = $term;
        $tmpCrumbs = array();

      
        echo '<a class="tax" href="' . home_url() . '/produkty"> Produkty </a>';
        echo $stepIcon;
        
        while ($tmpTerm->parent > 0){
          $tmpTerm = get_term($tmpTerm->parent, get_query_var("taxonomy"));
          $crumb = '<a href="' . get_term_link($tmpTerm, get_query_var('taxonomy')) . '">' . $tmpTerm->name . '</a>';
          array_push($tmpCrumbs, $stepIcon,  $crumb);
        }
        echo implode('', array_reverse($tmpCrumbs));
        echo '<a class="current" href="' . get_term_link($tmpTerm, get_query_var('taxonomy')) . '">' . $term->name . '</a>';

        $term_id = $term->term_id;
        $taxonomy_name = 'trips-category';
        $termchildren = get_term_children( $term_id, $taxonomy_name );
    }

    
    if ( get_post_type() == 'trips' && is_single()) {
        $obj = get_queried_object();
        $terms = wp_get_post_terms(  $obj->ID , 'trips-category', array( 'orderby' => 'parent', 'order' => 'DESC' ) );

        $term = get_term_by("slug", $terms[0]->name, 'trips-category' );
        $tmpTerm = $term;
        $tmpCrumbs = array();

        echo '<li><a class="tax" href="' . home_url() . '/"> <&nbsp;&nbsp;Wróć </a></li>';
        echo $stepIcon;

        for ($i=0; $i < count($terms); $i++) { 
            $crumb = '<li><a href="' . get_term_link($terms[$i], get_query_var('taxonomy')) . '">' . $terms[$i]->name . '</a></li>';
            array_push($tmpCrumbs, $stepIcon,  $crumb);
        }

        echo implode('', array_reverse($tmpCrumbs));

        echo '<li class="current">'. get_the_title() .'</li>';
    }


    if ( is_page() ) {
        echo '<p class="current">'. get_the_title() .'</p>';
    }
    // if ( is_shop() ) {
    //     echo '<a  href="'. get_option('home'). '"> ' . the_translation('home_page') . ' </a>';
    //     echo $stepIcon;
    //     echo '<p class="current"> ' . the_translation('shop_title') . '</p>';
    // }


    if ( get_post_type() == 'post') {
        
        $obj = get_queried_object();
        $terms = wp_get_post_terms(  $obj->ID , 'category', array( 'orderby' => 'parent', 'order' => 'DESC' ) );

        $term = get_term_by("slug", $terms[0]->name, 'category' );
        $tmpTerm = $term;
        $tmpCrumbs = array();

        echo '<a href="' . get_option('home') . '/aktualnosci' . '">Aktualności</a>';
        echo $stepIcon;

        for ($i=0; $i < count($terms); $i++) { 
            $crumb = '<a href="' . get_term_link($terms[$i], get_query_var('taxonomy')) . '">' . $terms[$i]->name . '</a>';
            array_push($tmpCrumbs, $stepIcon,  $crumb);
        }

        echo implode('', array_reverse($tmpCrumbs));

        echo '<li class="current">'. get_the_title() .'</li>';
    }


    echo '</ul>';
}
