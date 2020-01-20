<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$text = new FieldsBuilder('text');

$text
    ->addTextArea('text', ['wrapper' => ['width' => '90']])
    ->addTrueFalse('bigger_line_height', ['wrapper' => ['width' => '10']]);

return $text;
