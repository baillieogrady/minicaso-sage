<?php
/**
 * Theme Settings
 */

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$social = new FieldsBuilder('Social');

$social
    ->setLocation('options_page', '==', 'global-settings');

$social
    ->addText('email')
    ->addTrueFalse('banner')
    ->addText('text')
    ->conditional('banner', '==', '1')
    ->addWysiwyg('shipping');

return $social;
