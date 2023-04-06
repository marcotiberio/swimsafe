<?php

namespace Flynt\Components\BlockArtistSelector;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'artist';

add_filter('Flynt/addComponentData?name=ArchiveArtists', function ($data) {
    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'ignore_sticky_posts' => 1,
        'posts_per_page' => -1,
        'order' => 'ASC',
    ]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockArtistSelector',
        'label' => 'Block: Artist Selector',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Content Selection', 'flynt'),
                'name' => 'contentSelectionTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Artists', 'flynt'),
                'name' => 'post',
                'type' => 'relationship',
                'post_type' => [
                    'artist',
                ],
                'allow_null' => 1,
                'multiple' => 1,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ],
        ]
    ];
}

Options::addTranslatable('BlockArtistSelector', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
        ],
    ]
]);
