<?php namespace Guanaima\Taxonomies;


class Location
{
    function __construct()
    {
        add_action( 'init', array($this,'defineLocation'));
    }
    public function defineLocation(){
        $labels = array(
            'name'                       => _x( 'Locations', 'Taxonomy General Name', 'sage' ),
            'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'sage' ),
            'menu_name'                  => __( 'Locations', 'sage' ),
            'all_items'                  => __( 'All Locations', 'sage' ),
            'parent_item'                => __( 'Location', 'sage' ),
            'parent_item_colon'          => __( 'Location:', 'sage' ),
            'new_item_name'              => __( 'New Location', 'sage' ),
            'add_new_item'               => __( 'Add New Location', 'sage' ),
            'edit_item'                  => __( 'Edit Location', 'sage' ),
            'update_item'                => __( 'Update Location', 'sage' ),
            'view_item'                  => __( 'View Location', 'sage' ),
            'separate_items_with_commas' => __( 'Separate locations with commas', 'sage' ),
            'add_or_remove_items'        => __( 'Add or remove location', 'sage' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
            'popular_items'              => __( 'Popular Locations', 'sage' ),
            'search_items'               => __( 'Search Locations', 'sage' ),
            'not_found'                  => __( 'Location Not Found', 'sage' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_in_rest'               => true, //IMPORTANT! you cant filter posts by this taxonomy like wp-json/wp/v2/media?filter[location]=<name>
            'show_tagcloud'              => true,
            'query_var'                  => 'location',
            //if you dont specific this value you can not filter out the previous format but this way
            //wp-json/wp/v2/posts/?filter[taxonomy]=location&filter[term]=<name>
        );
        register_taxonomy( 'location', array( 'place','attachment' ), $args );
    }
}

new Location();
