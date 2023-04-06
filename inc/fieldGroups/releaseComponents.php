<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'releaseMeta',
        'title' => 'Release Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Info', 'flynt'),
                'name' => 'releaseInfo',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Buy', 'flynt'),
                'name' => 'buyTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Buy Link', 'flynt'),
                'name' => 'buyLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => 100
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'release',
                ],
            ],
        ],
    ]);
    // ACFComposer::registerFieldGroup([
    //     'name' => 'releaseComponents',
    //     'title' => __('Release Components', 'flynt'),
    //     'style' => 'seamless',
    //     'fields' => [
    //         [
    //             'name' => 'releaseComponents',
    //             'label' => __('Release Components', 'flynt'),
    //             'type' => 'flexible_content',
    //             'button_label' => __('Add Component', 'flynt'),
    //             'layouts' => [
    //                 Components\BlockAnnouncement\getACFLayout(),
    //                 Components\BlockContactForm\getACFLayout(),
    //                 Components\BlockDivider\getACFLayout(),
    //                 Components\BlockEventDescription\getACFLayout(),
    //                 Components\BlockGallery\getACFLayout(),
    //                 Components\BlockGalleryEvent\getACFLayout(),
    //                 Components\BlockPress\getACFLayout(),
    //                 Components\BlockVideoOembed\getACFLayout(),
    //                 Components\BlockWysiwyg\getACFLayout(),
    //                 Components\SliderImages\getACFLayout(),
    //             ],
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'release',
    //             ],
    //         ],
    //     ],
    // ]);
});
