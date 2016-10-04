<?php namespace Guanaima\Taxonomies;


class Theme
{
    function __construct()
    {
        add_action( 'init', array($this,'defineTheme'));
    }
    public function defineTheme(){
        $labels = array(
            'name'                       => _x( 'Themes', 'Taxonomy General Name', 'sage' ),
            'singular_name'              => _x( 'Theme', 'Taxonomy Singular Name', 'sage' ),
            'menu_name'                  => __( 'Themes', 'sage' ),
            'all_items'                  => __( 'All Themes', 'sage' ),
            'parent_item'                => __( 'Theme', 'sage' ),
            'parent_item_colon'          => __( 'Theme:', 'sage' ),
            'new_item_name'              => __( 'New Theme', 'sage' ),
            'add_new_item'               => __( 'Add New Theme', 'sage' ),
            'edit_item'                  => __( 'Edit Theme', 'sage' ),
            'update_item'                => __( 'Update Theme', 'sage' ),
            'view_item'                  => __( 'View Theme', 'sage' ),
            'separate_items_with_commas' => __( 'Separate Themes with commas', 'sage' ),
            'add_or_remove_items'        => __( 'Add or remove Theme', 'sage' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
            'popular_items'              => __( 'Popular Themes', 'sage' ),
            'search_items'               => __( 'Search Themes', 'sage' ),
            'not_found'                  => __( 'Theme Not Found', 'sage' ),
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
            'query_var'                  => 'themes',
            //if you dont specific this value you can not filter out the previous format but this way
            //wp-json/wp/v2/posts/?filter[taxonomy]=location&filter[term]=<name>
        );
        register_taxonomy( 'themes', array( 'place','attachment' ), $args );
    }
}

new Theme();
