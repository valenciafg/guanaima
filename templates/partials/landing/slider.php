<?php

$landing = new \Guanaima\Components\Landing();
$images = $landing->getSliderImages();
?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(function($) {
        $('.landing-slider').vegas({
            overlay: '<?= $landing->getOverlay();?>',
            slides: [
                <?php foreach($images as $img):?>
                { src: '<?= $img;?>' },
                <?php endforeach;?>
            ]
        });
    });
</script>
<div class="landing-slider" style="height:100vh; margin: 0 auto;">
    <div class="welcome-landing text-capitalize">
        <search-images>Loading</search-images>
    </div>
</div>