<?php

/** 
 * Partials are useful for re-using variables 
 * across different Post Types / etc
 * 
 * Here we're using our page-builder ACF in Pages and single Posts
 */

namespace App\Controllers\Partials;

trait PageBuilder
{
    public function pageBuilder()
    {
        $post_id = get_the_ID();
        $page_builder = get_field('page_builder', $post_id);

        if (!$page_builder) {
            return false;
        } else {
            // Generate classes for each block and column based on field values
            // foreach ($page_builder as $key => $block) {

                // Generate classes for columns in each block
                // if ($block['acf_fc_layout'] === 'columns') {
                //     foreach ($block['columns'] as $column_key => $column) {
                //         $page_builder[$key]['columns'][$column_key]['class'] = $this->block_classes($column);
                //     }
                // }

                // $page_builder[$key]['class'] = $this->block_classes($block);
            // }
            return $page_builder;
        }
    }

    // public static function block_classes($block)
    // {
    //     $block_class = [];

    //     if (isset($block['acf_fc_layout'])) {
    //         $block_class[] = 'block';
    //         $block_class[] = 'block--' . str_replace('_', '-', $block['acf_fc_layout']);
    //     }

    //     if ($block['background_color']) {
    //         if ($block['background_color'] === 'Image') {
    //             // Background-images are lazy-loaded
    //             $block_class[] = 'lozad';

    //             if (!$block['background_color_fill']) {
    //                 $block_class[] = 'has-gray-background-color';
    //             }
    //         } else {
    //             $block_class[] = 'has-' . strtolower($block['background_color']) . '-background-color';
    //         }

    //         if (
    //             $block['background_color'] != 'White'
    //             && $block['background_color'] != 'Gray'
    //             && $block['background_color'] != 'Orange'
    //             && $block['background_color'] != 'Yellow'
    //         ) {
    //             $block_class[] = 'has-white-color';
    //         } else {
    //             $block_class[] = 'has-black-color';
    //         }
    //     }

    //     if ($block['background_size']) {
    //         $block_class[] = 'background-size-' . strtolower($block['background_size']);
    //     }

    //     if ($block['background_position']) {
    //         $block_class[] = 'background-position-' . strtolower(str_replace(' ', '-', $block['background_position']));
    //     }

    //     if (!$block['background_size'] && !$block['background_position']) {
    //         $block_class[] = 'has-background-image';
    //     }

    //     if ($block['padding'] && $block['padding'] != 'None') {
    //         $block_class[] = 'padding-' . strtolower($block['padding']);
    //     }

    //     if ($block['text_align'] && $block['text_align'] != 'Left') {
    //         $block_class[] = 'text-' . strtolower($block['text_align']);
    //     }

    //     if ($block['corners'] && $block['corners'] != 'Square') {
    //         $block_class[] = 'corners-' . str_replace(' ', '-', strtolower($block['corners']));
    //     }

    //     if ($block['display']) {
    //         if ($block['display'] === 'Mobile') {
    //             $block_class[] = 'display-none-menu-up';
    //         }

    //         if ($block['display'] === 'Desktop') {
    //             $block_class[] = 'display-none-menu-down';
    //         }
    //     }

    //     if ($block['width'] && $block['width'] === 'Contained') {
    //         $block_class[] = 'container';
    //     } elseif ($block['width'] && $block['width'] === 'Full Width') {
    //         $block_class[] = 'container container--full-width';
    //     } elseif ($block['width']) {
    //         $block_class[] = 'grid-' . str_replace(' ', '-', strtolower($block['width']));
    //     }

    //     return implode(' ', $block_class);
    // }
}