<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<div class="slider-simple full-width-section">
    <ul class="bxslider">
        <?php foreach ($atts['slides'] as $key => $slide) {

            if (isset($slide['slide_img']['url'])) {
                ?>
                <li class="slide"
                    style="background-image: url('<?php echo esc_attr($slide['slide_img']['url']); ?>')">

                    <div class="slide-content">
                        <h2 class="slider-title"><?php echo $slide['slide_title']; ?></h2>
                    </div>
                </li>
            <?php }
        } ?>
    </ul>
</div>