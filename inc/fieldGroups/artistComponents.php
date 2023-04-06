<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'artistMeta',
        'title' => 'Artist Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'bioTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'artistBio',
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
                'label' => __('Links', 'flynt'),
                'name' => 'linksTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Link Column', 'flynt'),
                'name' => 'repeaterOuter',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => '1',
                'button_label' => __('Add Column', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Links', 'flynt'),
                        'name' => 'repeaterInner',
                        'type' => 'repeater',
                        'layout' => 'block',
                        'button_label' => __('Add Link', 'flynt'),
                        'sub_fields' => [
                            [
                                'label' => __('Link', 'flynt'),
                                'name' => 'socialLink',
                                'type' => 'link',
                                'return_format' => 'array',
                                'wrapper' => [
                                    'width' => 100
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'label' => __('Booking', 'flynt'),
                'name' => 'bookingTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Booking Link', 'flynt'),
                'name' => 'bookingLink',
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
                    'value' => 'artist',
                ],
            ],
        ],
    ]);
    // ACFComposer::registerFieldGroup([
    //     'name' => 'artistComponents',
    //     'title' => __('Artist Components', 'flynt'),
    //     'style' => 'seamless',
    //     'fields' => [
    //         [
    //             'name' => 'artistComponents',
    //             'label' => __('Artist Components', 'flynt'),
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
    //                 'value' => 'artist',
    //             ],
    //         ],
    //     ],
    // ]);
});
