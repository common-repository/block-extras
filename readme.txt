=== Block Extras ===
Contributors: gt81plugins
Donate link: https://www.gutenbergextras.com/
Tags: gutenberg,  blocks, gutenberg blocks, editor, gutenberg, page builder, extra attributes, default blocks
Requires at least: 5.2
Tested up to: 5.3.2
Stable tag: 1.0.1
Requires PHP: 5.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Block extras adds extra attributes to default Gutenberg blocks. Attributes include margin, padding, line height, letter spacing and rounded corners.

== Description ==

Block extras adds new attributes to many of the default Gutenberg blocks. This allows extra customisation on top of your theme's CSS, within the parameters you allow.

The plugin uses utility auto-generated CSS classes to add the relevant CSS attribute to your blocks, **no inline styles are used**.

* Individual margins (including negative) and padding can be applied to many block types.
* Typography blocks (paragraphs and headings) can have line height and letter spacing applied.
* Rounded corners can be applied to groups blocks.

= Blocks currently supported =

* core/paragraph - margin, padding, line height, letter spacing
* core/image - margin, padding
* core/heading - margin, padding, line height, letter spacing
* core/gallery - margin
* core/list - margin, padding
* core/quote - margin, padding
* core/table - margin
* core/group - margin, padding, rounded corners

== Installation ==

1. Upload the plugin files to your plugin directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Block Extras Settings screen to configure the plugin

== Frequently Asked Questions ==

= Does this plugin add inline styles? =

No, it uses automatically generated classes to achieve the selected options.

= Can I customise the stylesheet? =

No, the stylesheet is automatically created when changing any block settings.

= Can I change how much of an attribute is applied? =

You can only apply the minimum, maximum and default settings to an attribute. Individual customisation is not currently possible.

== Screenshots ==

1. Group block with margins and rounded corners being applied
2. Heading block with line height and letter spacing being applied
3. Gutenberg side panel showing options for a group block - margin, padding and rounded corners
4. Gutenberg side panel showing options for a paragraph block - margin, padding, line height and letter spacing
5. Block extras options screen

== Changelog ==

= 1.01 =
* Fixed an issue when changing an attribute's default value where the any blocks with that new default showed a gutenberg unexpected block error

= 1.0 =
* Initial release