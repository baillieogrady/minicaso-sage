<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$link = new FieldsBuilder('link');

$link
    ->addText('link_text', ['wrapper', ['width' => '50']])
    ->addText('link',['wrapper', ['width' => '50']]);

return $link;

    
