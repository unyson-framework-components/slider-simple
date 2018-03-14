<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'slides' => array(
        'type' => 'addable-popup',
        'label' => __('Simple Slider', 'ust'),
        'popup-title' => __('Add/Edit Slide', 'ust'),
        'desc' => __('Create your slide', 'ust'),
        'template' => '{{=slide_title}}',
        'popup-options' => array(
            'slide_img' => array(
                'type'  => 'upload',
                'value' => array(),
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Img', ''),
                'desc'  => __('Img for slider', ''),
                'images_only' => true,

            ),

            'slide_title' => array(
                'type' => 'text',
                'label' => __('Title', 'ust'),
            )
        ),
    )
);