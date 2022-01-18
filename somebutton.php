<?php
/**
*Plugin Name: Somebutton
*Description: Plugarien opiskelua.
*Version:     1.0
*Author:      Antti Salonen
**/

function somebutton_function($attr)
{

    $attr = shortcode_atts( array (
        'url' => '',
    ), $attr);

    $output = $attr['url'];

    // Checking the Social Media service
    if (str_contains($output, 'facebook')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/facebook-logo-2428.png';
        $buttonStr = 'Facebook';
    } elseif (str_contains($output, 'instagram')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/instagram-logo-2433.png';
        $buttonStr = 'Instagram';
    } elseif (str_contains($output, 'twitter')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/twitter-logo-2429.png';
        $buttonStr = 'Twitter';
    } elseif (str_contains($output, 'youtube')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/youtube-logo-2431.png';
        $buttonStr = 'Youtube';
    } elseif (str_contains($output, 'linkedin')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/linkedin-logo-2430.png';
        $buttonStr = 'LinkedIn';
    } elseif (str_contains($output, 'tiktok')) {
        $path = plugin_dir_url( __FILE__ ).'assets/images/tiktok-logo-4500.png';
        $buttonStr = 'TikTok';
    } else {

    }

    // Rendering content
    $content = '<div style="padding-bottom: 1px;">';
        $content .= '<div style="float: left; height: 60px; background-color: white;">';
            $content .= '<img style="height: 45px; padding-right: 20px;" src="' . $path . '">';
        $content .= '</div>';
        $content .= '<div style="float: left;">';
            $content .= '<form action="' . $output . '" method="get" target="_blank">';
            $content .= '<button style="width: 150px; height: 60px;" type="submit">' . $buttonStr . '</button>';
            $content .= '</form>';
        $content .= '</div>';
    $content .= '</div><br/>';
    
    return $content;
}

add_shortcode('somebutton', 'somebutton_function');