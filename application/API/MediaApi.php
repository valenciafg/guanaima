<?php namespace Guanaima\API;


class MediaApi
{
    private $type = 'attachment';
    function __construct(){
        //add_filter( 'rest_api_init', array( $this, 'register_place_routes' ));
        add_action( 'rest_api_init', array( $this, 'register_media_meta_fields') );
    }

    function register_media_meta_fields() {
        register_api_field( $this->type,
            'attached_source_url',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_source_url'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'media_author',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_author'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'author_url',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_author_url'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'device',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_device'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'geographic_coordinates',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_geographic'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'attached_location',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_location'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'attached_country',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_country'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'attached_theme',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_theme'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'attached_media_category',
            array(
                'get_callback'    => array( $this,'get_media_meta_field_media_category'),
                'schema'          => null,
            )
        );
    }

    function get_media_meta_field_source_url( $object, $field_name, $request ) {
        $source_url = false;
        $attached_info = get_post_meta( $object[ 'id' ], 'attached_info', true);
        if(!empty($attached_info)){
            if(!empty($attached_info['attached_source_url']))
                $source_url = $attached_info['attached_source_url'];
        }
        return $source_url;
    }

    function get_media_meta_field_author( $object, $field_name, $request ) {
        $author = false;
        $attached_info = get_post_meta( $object[ 'id' ], 'attached_info', true);
        if(!empty($attached_info)){
            if(!empty($attached_info['attached_author']))
                $author = $attached_info['attached_author'];
        }
        return $author;
    }

    function get_media_meta_field_author_url( $object, $field_name, $request ) {
        $author_url = false;
        $attached_info = get_post_meta( $object[ 'id' ], 'attached_info', true);
        if(!empty($attached_info)){
            if(!empty($attached_info['attached_author_url']))
                $author_url = $attached_info['attached_author_url'];
        }
        return $author_url;
    }

    function get_media_meta_field_device( $object, $field_name, $request ) {
        $device = false;
        $attached_info = get_post_meta( $object[ 'id' ], 'attached_info', true);
        if(!empty($attached_info)){
            if(!empty($attached_info['attached_device']))
                $device = $attached_info['attached_device'];
        }
        return $device;
    }

    function get_media_meta_field_geographic( $object, $field_name, $request ) {
        $longitude = false;
        $latitude = false;
        $location_data = get_post_meta( $object[ 'id' ], 'attached_location_data', true);
        if(!empty($location_data)){
            if(!empty($location_data['attached_longitude']))
                $longitude = $location_data['attached_longitude'];
            if(!empty($location_data['attached_latitude']))
                $latitude = $location_data['attached_latitude'];
        }
        $coordinates = ['longitude'=>$longitude,'latitude'=>$latitude];

        return $coordinates;
    }

    function get_media_meta_field_location( $object, $field_name, $request ) {
        $location = "";
        $terms = get_the_terms($object[ 'id' ],'location');
        if(!empty($terms)){
            if(count($terms) < 2){
                $location = $terms[0]->name;
            }else {
                foreach ($terms as $term) {
                    if (!empty($term->name)){
                        $location .= $term->name.", ";
                    }
                }
            }
        }
        $location = rtrim(rtrim($location),',');
        return $location;
    }
    function get_media_meta_field_country( $object, $field_name, $request ) {
        $country = "";
        $terms = get_the_terms($object[ 'id' ],'country');
        if(!empty($terms)){
            if(count($terms) < 2){
                $country = $terms[0]->name;
            }else {
                foreach ($terms as $term) {
                    if (!empty($term->name)){
                        $country .= $term->name.", ";
                    }
                }
            }
        }
        $country = rtrim(rtrim($country),',');
        return $country;
    }
    function get_media_meta_field_theme( $object, $field_name, $request ) {
        $theme = "";
        $terms = get_the_terms($object[ 'id' ],'themes');
        if(!empty($terms)){
            if(count($terms) < 2){
                $theme = $terms[0]->name;
            }else {
                foreach ($terms as $term) {
                    if (!empty($term->name)){
                        $theme .= $term->name.", ";
                    }
                }
            }
        }
        $theme = rtrim(rtrim($theme),',');
        return $theme;
    }
    function get_media_meta_field_media_category( $object, $field_name, $request ) {
        $media_category = "";
        $terms = get_the_terms($object[ 'id' ],'media_category');
        if(!empty($terms)){
            if(count($terms) < 2){
                $media_category = $terms[0]->name;
            }else {
                foreach ($terms as $term) {
                    if (!empty($term->name)){
                        $media_category .= $term->name.", ";
                    }
                }
            }
        }
        $media_category = rtrim(rtrim($media_category),',');
        return $media_category;
    }
}