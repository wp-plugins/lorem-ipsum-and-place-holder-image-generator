=== Lorem Ipsum and Place Holder Image Generator ===
Contributors: bythegram
Donate link: http://bythegram.ca
Tags: lorem Ipsum, shortcode, 
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick and easy to use Lorem Ipsum Generator

== Description ==

I'm not sure when you will ever need to use it but here are two simple to use shortcodes that will generate Lorem Ipsum and a Place Holder image. 
The shortcode [loremipsum] uses <a href="http://loripsum.net"> loripsum.net</a> API. It is easy to set the options as well.
Add the paragraph attribute to change how many paragraphs are displayed, the length attribute changes the average length (short, medium, long or verylong) and the options attribute allows you to list any of the other options (seperated by '/').
Here is the break down of the availible options:
 
<ul>
            
            
            <li><b>decorate</b> - Add bold, italic and marked text.</li>        
            <li><b>link</b> - Add links.</li>
            <li><b>ul</b> - Add unordered lists.</li>
            <li><b>ol</b> - Add numbered lists.</li>
            <li><b>dl</b> - Add description lists.</li> 
            <li><b>bq</b> - Add blockquotes.</li>
            <li><b>code</b> - Add code samples.</li>
            <li><b>headers</b> - Add headers.</li>
            <li><b>allcaps</b> - Use ALL CAPS.</li> 
            <li><b>prude</b> - Prude version.</li>
            <li><b>plaintext</b> - Return plain text, no HTML.</li>
            
</ul>

An example of the shortcode with some of the options:

[loremipsum paragraph="3" length="long" options="decorate/link/code"]

This will generate this content <a href="http://loripsum.net/api/3/long/decorate/link/code">http://loripsum.net/api/3/long/decorate/link/code</a>

The [placeholder] shortcode will generate an image from <a href="http://placehold.it">placehold.it</a>. Add the size attribute to choose your size 
(100x100 is the default), the fill and text attributes will take HEX colors. You can also choose the file type (png, jpg, jpeg or gif, gif is the 
default) as well as change the words inside the image (the size is the default). 

Here is an example:

[placeholder size="200x200" fill="CCCCCC" text="FFFFFF" words="Hello Wordpress!" type="png"]

<a href="http://placehold.it/200x200/CCCCCC/FFFFFF.png&text=Hello+Wordpress!">http://placehold.it/200x200/CCCCCC/FFFFFF.png&text=Hello+Wordpress!</a>

== Installation ==

1. Upload `ag_lorem` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the [loremipsum] shortcode in a post or page to generate Lorem Ipsum.
4. Use the [placeholder] shortcode in a post or page to generate a Place Holder Image.

== Frequently Asked Questions ==

= Have a question or request? =

Awesome! Submit it via the "Support" tab and I'll be sure to answer you.

== Screenshots ==


== Changelog ==
= 0.2 =
Updated the placeholder shortcode to allow for text and file types
= 0.1 =
The first release. Tested and works. 
