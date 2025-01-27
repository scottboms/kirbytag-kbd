<?php

//namespace scottboms\kirbytag-kbd;

/**
 * Kirby kbd KirbyTag
 *
 * @author Scott Boms <plugins@scottboms.com>
 * @link https://github.com/scottboms/kirbytag-kbd
 * @license MIT
**/

use Composer\Semver\Semver;
use Kirby\Cms\App as Kirby;

// validate Kirby version
if (Semver::satisfies(Kirby::version() ?? '0.0.0', '~4.0 || ~5.0') === false) {
	throw new Exception('HTML5 Video Tag requires Kirby 4 or 5');
}

Kirby::plugin(
  name: 'scottboms/kirbytag-kbd', 
  info: [
    'homepage' => 'https://github.com/scottboms/kirbytag-kbd'
  ],
  version: '1.0.2',
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