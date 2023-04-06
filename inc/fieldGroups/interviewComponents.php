<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'interviewMeta',
        'title' => 'Interview Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'bioTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Info', 'flynt'),
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
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'interview',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'interviewComponents',
        'title' => __('Interview Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'interviewComponents',
                'label' => __('Interview Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImageInterview\getACFLayout(),
                    Components\BlockImageTextInterview\getACFLayout(),
                    Components\BlockWysiwygInterview\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'interview',
                ],
            ],
        ],
    ]);
});
