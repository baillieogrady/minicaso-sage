<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page_builder = new FieldsBuilder('Page Builder');

$page_builder
    ->setLocation('post_type', '==', 'page');

$page_builder
    ->setGroupConfig('position', 'acf_after_title');

$page_builder
    ->addFlexibleContent('page_builder', ['button_label' => 'Add Block'])

    ->addLayout('hero')
    ->addTab('content')
    ->addFields(get_field_partial('partials.heading'))
    ->addTextArea('text')
    ->addRepeater('buttons')
    ->addText('button_text')
    ->addTrueFalse('button_scroll')
    ->addPageLink('button_link')
    ->conditional('button_scroll', '==', '0')
    ->addTrueFalse('transparent')
    ->endRepeater()
    ->addImage('background_image')
    ->addTab('options')
    ->addTrueFalse('video')
    ->addText('youtube_id')
    ->conditional('video', '==', '1')

    ->addLayout('domino')
    ->addTab('content')
    ->addFields(get_field_partial('partials.heading'))
    ->addFields(get_field_partial('partials.link'))
    ->addImage('image')
    ->addPageLink('image_link')
    ->addTab('options')
    ->addTrueFalse('switch')
    ->addRepeater('hover_spots')
    ->addNumber('top', [
        'instructions' => 'Percentage from top',
        'min' => '0',
        'max' => '100',
        'wrapper', ['width' => '50']
        ])
    ->addNumber('left', [
        'instructions' => 'Percentage from left',
        'min' => '0',
        'max' => '100',
        'wrapper', ['width' => '50']
        ])
    ->endRepeater()
    ->addFields(get_field_partial('partials.link_right'))

    ->addLayout('slider')
    ->addTrueFalse('switch')
    ->addFields(get_field_partial('partials.heading'))
    ->addRelationship('slides', [
        'post_type' => ['product']
    ])
    ->addFields(get_field_partial('partials.link_right'))

    ->addLayout('text')
    ->addWysiwyg('content')
    ->addTrueFalse('remove_margin')

    ->addLayout('form')
    ->addFields(get_field_partial('partials.heading'))
    ->addWysiwyg('shortcode');

return $page_builder;