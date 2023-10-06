<?php
function al_filter_search($query)
{
    if  ( !is_admin() && $query->is_search ) {
        $query->set('post_type', array('post','page', 'addlib', 'faqs'));
    }

    return $query;
}
add_filter('pre_get_posts', 'al_filter_search');