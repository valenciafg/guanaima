<?php namespace Guanaima\Components;
use WP_Query;

class Landing
{
    private $images;
    private $overlay;
    function __construct()
    {
        $this->setImages();
        $this->setOverlay();
    }
    private function setOverlay(){
        $this->overlay = get_stylesheet_directory_uri() .  '/node_modules/vegas/dist/overlays/07.png';
    }
    private function setImages(){
        $landing_images = $this->setLandingImages();
        if(!empty($landing_images)){
            $images = $landing_images;
        }else{
            $images[] = get_stylesheet_directory_uri() . '/assets/images/mauritius.jpg';
        }

        $this->images = $images;
    }
    private function setLandingImages(){
        $images = array();
        $term = get_term_by( 'slug', 'landing', 'media_category');

        $args = array(
            'posts_per_page' => -1,
            'post_type'     => array( 'attachment' ),
            'post_status'   => array( 'publish', 'inherit' ),
            'tax_query'      => array(
                array(
                    'taxonomy' => 'media_category',
                    'field'    => 'slug',
                    'terms'    => $term->slug
                )
            )
        );

        $query = new WP_Query($args);
        if($query && $query->have_posts()):
            while ( $query->have_posts() ) :
                $query->the_post();
                $id = $query->post->ID;
                $image = wp_get_attachment_url($id);
                $images[] = $image;
            endwhile;
        endif;
        return $images;
    }
    public function getSliderImages(){
        return $this->images;
    }
    public function getOverlay(){
        return $this->overlay;
    }
}