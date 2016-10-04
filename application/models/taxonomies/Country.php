<?php namespace Guanaima\Taxonomies;


class Country
{
    function __construct()
    {
        add_action( 'init', array($this,'defineCountry'));
    }
    public function defineCountry(){
        $labels = array(
            'name'                       => _x( 'Countries', 'Taxonomy General Name', 'sage' ),
            'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'sage' ),
            'menu_name'                  => __( 'Countries', 'sage' ),
            'all_items'                  => __( 'All Countries', 'sage' ),
            'parent_item'                => __( 'Country', 'sage' ),
            'parent_item_colon'          => __( 'Country:', 'sage' ),
            'new_item_name'              => __( 'New Country', 'sage' ),
            'add_new_item'               => __( 'Add New Country', 'sage' ),
            'edit_item'                  => __( 'Edit Country', 'sage' ),
            'update_item'                => __( 'Update Country', 'sage' ),
            'view_item'                  => __( 'View Country', 'sage' ),
            'separate_items_with_commas' => __( 'Separate Countries with commas', 'sage' ),
            'add_or_remove_items'        => __( 'Add or remove Country', 'sage' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
            'popular_items'              => __( 'Popular Countries', 'sage' ),
            'search_items'               => __( 'Search Countries', 'sage' ),
            'not_found'                  => __( 'Country Not Found', 'sage' ),
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
            'query_var'                  => 'country',
            //if you dont specific this value you can not filter out the previous format but this way
            //wp-json/wp/v2/posts/?filter[taxonomy]=location&filter[term]=<name>
        );
        register_taxonomy( 'country', array( 'place','attachment' ), $args );
    }
}

new Country();
