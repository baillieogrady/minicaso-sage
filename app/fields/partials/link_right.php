<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$link_right = new FieldsBuilder('link right');

$link_right
    ->addTrueFalse('link_right')
    ->addText('link_right_text')
    ->conditional('link_right', '==', "1")
    ->addPageLink('link_right_url')
    ->conditional('link_right', '==', "1");

return $link_right;

    
