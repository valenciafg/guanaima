<?php namespace Guanaima\Taxonomies;


class PlaceType
{
    function __construct()
    {
        add_action( 'init', array($this,'definePlaceType'));
    }
    public function definePlaceType(){
        $labels = array(
            'name'                       => _x( 'Place Types', 'Taxonomy General Name', 'sage' ),
            'singular_name'              => _x( 'Place Type', 'Taxonomy Singular Name', 'sage' ),
            'menu_name'                  => __( 'Place Types', 'sage' ),
            'all_items'                  => __( 'All Place Types', 'sage' ),
            'parent_item'                => __( 'Place Type', 'sage' ),
            'parent_item_colon'          => __( 'Place Type:', 'sage' ),
            'new_item_name'              => __( 'New Place Type', 'sage' ),
            'add_new_item'               => __( 'Add New Place Type', 'sage' ),
            'edit_item'                  => __( 'Edit Place Type', 'sage' ),
            'update_item'                => __( 'Update Place Type', 'sage' ),
            'view_item'                  => __( 'View Place Type', 'sage' ),
            'separate_items_with_commas' => __( 'Separate place type with commas', 'sage' ),
            'add_or_remove_items'        => __( 'Add or remove place type', 'sage' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
            'popular_items'              => __( 'Popular Place Types', 'sage' ),
            'search_items'               => __( 'Search Place Types', 'sage' ),
            'not_found'                  => __( 'Place Type Not Found', 'sage' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_in_rest'               => true,
            'show_tagcloud'              => true,
            'query_var'                  => 'place_type',
        );
        register_taxonomy( 'place_type', array( 'place' ), $args );
    }
}

new PlaceType();
