<?php

//namespace scottboms\kirbytag-kbd;

/**
 * Kirby kbd KirbyTag
 *
 * @author Scott Boms <plugins@scottboms.com>
 * @link https://github.com/scottboms/kirbytag-kbd
 * @license MIT
**/

Kirby::plugin(
  name: 'scottboms/kirbytag-kbd', 
  info: [
    'homepage' => 'https://github.com/scottboms/kirbytag-kbd'
  ],
  version: '1.0.1',
  extends: [
    'tags' => [
      'kbd' => [
        'attr' => [
          'class',
        ],
        'html' => function($tag) {
          $html = '';
          // Variables to hold tag options
          $kbd_string = $tag->kbd;
          $class = $tag->class;

          if($class == '') {
            // If no class attribute, output the <kbd></kbd>
            $html .= '<kbd>' . $kbd_string . '</kbd>';
          } else {
            $html .= '<kbd class="' . $class . '">' . $kbd_string . '</kbd>';
          }

          return $html;
        }
      ]
    ]
  ]
);