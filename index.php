<?php

//namespace scottboms\kirbytag-kbd;

/**
 * Kirby kbd KirbyTag
 *
 * @author Scott Boms <plugins@scottboms.com>
 * @link https://github.com/scottboms/kirbytag-kbd
 * @license MIT
**/

use Kirby\Cms\App;
use Kirby\Sane\Html;
Kirby\Sane\Html::$allowedTags['kbd'] = ['class'];

// shamelessly borrowed from distantnative/retour-for-kirby
if (
	version_compare(App::version() ?? '0.0.0', '5.0.0', '<') === true ||
	version_compare(App::version() ?? '6.0.0', '7.0.0', '>=') === true
) {
	throw new Exception('kbd Kirbytag requires Kirby v6 or v7');
}

Kirby::plugin(
  name: 'scottboms/kirbytag-kbd',
  info: [
    'homepage' => 'https://github.com/scottboms/kirbytag-kbd',
    'license'  => 'MIT'
  ],
  version: '1.1.2',
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
