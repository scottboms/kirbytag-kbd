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

$version = App::version() ?? '0.0.0';
if (
    version_compare($version, '6.0.0-beta.1', '<') ||
    version_compare($version, '7.0.0', '>=')
) {
    throw new Exception('Webfinger requires Kirby 6');
}

Kirby::plugin('scottboms/kirbytag-kbd',
  info: [
    'homepage' => 'https://github.com/scottboms/kirbytag-kbd',
    'version'  => '6.0.0',
    'license'  => 'MIT',
    'authors'  => [[ 'name' => 'Scott Boms' ]],
  ],

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
