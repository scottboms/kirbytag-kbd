# kbd Kirbytag

Insert `<kbd>` HTML elements in Textarea and Writer fields.

## Installation

### Download

Download and copy this repository to `/site/plugins/kirbytag-kbd`.

### Git submodule

`git submodule add https://github.com/scottboms/kirbytag-kbd.git site/plugins/kirbytag-kbd`

## Blueprint Configuration

To enable the Textarea or Writer Mark in your blueprints, add the appropriate button or mark name to the list in your blueprints. For example, for `textarea` fields:

    fields:
      text:
        label: Text
        type: textarea
        buttons:
          - bold
          - italic
          - kbd

For a Writer Field type, use the follow to enable the Mark:

    fields:
      writer:
        label: Writer Field
        type: writer
        marks:
          - bold
          - italic
          - kbd

## Usage

Textarea Field:

    (kbd: Ctrl)

### Optional Class Attribute for the Textarea Button

    class: A CSS class/classes to append to the wrapper element

Example usage: `(kbd: Ctrl class: key)` 

## Compatibility

* Kirby 4.x
* Kirby 5

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please create [a new issue](issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

You are prohibited from using this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

