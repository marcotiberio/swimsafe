<?php

namespace Flynt\Components\BlockImageTextRepeater;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockImageTextRepeater',
        'label' => __('Block: Image/Text Multiple Rows', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Title', 'flynt'),
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text',
                'media_upload' => 0,
            ],
            [
                'label' => __('Rows', 'flynt'),
                'name' => 'rows',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Row', 'flynt'),
                'sub_fields' => [
                    FieldVariables\getColorBackground(),
                    [
                        'label' => __('Image Position', 'flynt'),
                        'name' => 'imagePosition',
                        'type' => 'button_group',
                        'choices' => [
                            'left' => sprintf('<i class=\'dashicons dashicons-align-left\' title=\'%1$s\'></i>', __('Image on the left', 'flynt')),
                            'right' => sprintf('<i class=\'dashicons dashicons-align-right\' title=\'%1$s\'></i>', __('Image on the right', 'flynt'))
                        ]
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'required' => 1,
                        'mime_types' => 'jpg,jpeg,png,svg',
                        'wrapper' =>  [
                            'width' => 20,
                        ],
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 1,
                        'wrapper' =>  [
                            'width' => 80,
                        ],
                    ],
                ],
            ]
        ]
    ];
}
