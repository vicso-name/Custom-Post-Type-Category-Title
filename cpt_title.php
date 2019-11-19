<?php 
    $terms = get_the_terms($post->ID, 'therapist_category' ); //Custom Post Type Taxonomy
    if ($terms && ! is_wp_error($terms)) :
        $tslugs_arr = array();
        foreach ($terms as $term) {
            $tslugs_arr[] = $term->name;
        }
        $terms_slug_str = join( " ", $tslugs_arr);
    endif;
    echo $terms_slug_str;
?>