<?php

$landing = new \Guanaima\Components\Landing();
$images = $landing->getSliderImages();
?>
<script type="text/javascript">
    jQuery(function() {
        jQuery('.landing-slider').vegas({
            overlay: '<?= $landing->getOverlay();?>',
            slides: [
                <?php foreach($images as $img):?>
                { src: '<?= $img;?>' },
                <?php endforeach;?>
            ]
        });
    });
</script>

