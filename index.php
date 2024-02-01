<?php

//namespace scottboms\kirbytag-kbd;

/**
 * Kirby kbd KirbyTag
 *
 * @version 1.0.0
 * @author Scott Boms <plugins@scottboms.com>
 * @copyright Scott Boms <plugins@scottboms.com>
 * @link https://github.com/scottboms/kirbytag-kbd
 * @license MIT
**/

Kirby::plugin('scottboms/kirbytag-kbd', [
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
]);