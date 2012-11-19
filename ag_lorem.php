<?php

/*
Plugin Name: Lorem Ipsum and Place Holder Image Generators
Plugin URI: http://bythegram.ca
Description: Two simple shortcodes to generate Lorem Ipsum and Place Holder Images in your posts using loripsum.net and placeholder.it API
Version: 0.1
Author: Adam Graham
Author URI: http://bythegram.ca
License: GPL2
*/

/*
[loremipsum]
Attributes are paragraphs,length and options.
paragraphs (the number of paragraphs you want returned), length (short, medium, long, verylong), options include any of the following seperated with a '/' (decorate,link,ul,ol,dl,bq,code,headers,allcaps,prude,plaintext) 
*/

if (!function_exists(ag_lorem_func)){
function ag_lorem_func($atts) {
extract( shortcode_atts( array(
                'paragraphs' => '10',
                'length' => 'medium',
                'options' => ''
                ), $atts ) );
$feedurl = "http://loripsum.net/api/$paragraphs/$length/$options";
$response = file_get_contents($feedurl);

return $response;
}
add_shortcode( 'loremipsum', 'ag_lorem_func' );
}

/* 
[placeholder]
Attributes are size, fill, text. 
Size (widthxheight), fill (Color HEX), text (Color HEX)
*/
if (!function_exists(ag_placehold_func)){
function ag_placehold_func($atts) {
extract( shortcode_atts( array(
                'size' => '100x100',
                'fill' => 'CCCCCC',
                'text' => 'FFFFFF'
                ), $atts ) );
$imgurl = "http://placehold.it/$size/$fill/$text";
$html = '<img src="'.$imgurl.'">';

return $html;
}
add_shortcode( 'placeholder', 'ag_placehold_func' );
}

?>