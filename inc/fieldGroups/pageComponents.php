<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => __('Page Components', 'flynt'),
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\ArchiveArtists\getACFLayout(),
                    Components\BlockFixedPage\getACFLayout(),
                    Components\BlockImageFullScreen\getACFLayout(),
                    Components\BlockNewsItem\getACFLayout(),
                    Components\BlockPostArchive\getACFLayout(),
                    Components\BlockPress\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'artist'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'interview'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'release'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'reusable-components'
                ],
            ],
        ],
    ]);
});
