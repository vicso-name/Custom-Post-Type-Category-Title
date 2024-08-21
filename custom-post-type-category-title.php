<?php
// Retrieve the terms associated with the current post for the custom taxonomy 'therapist_category'
$terms = get_the_terms(get_the_ID(), 'therapist_category'); // Using get_the_ID() instead of $post->ID for better compatibility

// Check if terms were retrieved and no errors occurred
if (!empty($terms) && !is_wp_error($terms)) {
    // Extract term names and join them into a string
    $terms_slug_str = implode(' ', wp_list_pluck($terms, 'name')); // wp_list_pluck is more concise
} else {
    $terms_slug_str = ''; // Fallback in case no terms were found
}

// Output the term names
echo esc_html($terms_slug_str); // Escape output for security
?>
