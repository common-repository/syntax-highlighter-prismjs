<?php
/*
Plugin Name: Syntax Highlighter with PrismJS
Plugin URI: https://difyel.com/
Description: Syntax Highlighter using prismjs 
Version: 0.0.1
Author: Mohamad Wael El Kurdi
Author URI: https://www.difyel.com
Text Domain: syntax-highlighter-prismjs
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if (!function_exists('add_action')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}


define('SH_PRISMJS_BASE', plugins_url('/', __FILE__));


add_action('wp_enqueue_scripts', 'enqueue_sh_prismjs');


function enqueue_sh_prismjs()
{


    wp_register_style('sh_prismjs_css', SH_PRISMJS_BASE . 'assets/vendor/prism/prism.css');
    wp_enqueue_style('sh_prismjs_css');



    wp_register_script('sh_prismjs_js', SH_PRISMJS_BASE . 'assets/vendor/prism/prism.js', array(), false, true);
    wp_enqueue_script('sh_prismjs_js');
}



add_shortcode('sh_prismjs_pre', 'sh_prismjs_process_pre');

add_shortcode('sh_prismjs_code', 'sh_prismjs_process_code');


function sh_prismjs_process_pre($atts, $content)
{
    extract(shortcode_atts(array(
        'class' => '',
        'data_line' => '',
        'escape_html' => ''
    ), $atts));

    $content = stristr($content, '<pre>');
    $content = stristr($content, '</pre>', true);
    $content = substr($content, 5);
    $content = trim($content);

    if ($escape_html == 'escape') {
        $content = htmlentities(stripslashes($content));
    }


    $content = '<pre class="' . $class . '" data-line="' . $data_line . '"><code>' .  $content . '</code></pre>';

    return "$content";
}


function sh_prismjs_process_code($atts, $content)
{
    extract(shortcode_atts(array(
        'class' => '',
        'escape_html' => ''
    ), $atts));

    $content = stristr($content, '<code>');
    $content = stristr($content, '</code>', true);
    $content = substr($content, 6);
    $content = trim($content);

    if ($escape_html == 'escape') {
        $content = htmlentities(stripslashes($content));
    }


    $content = '<code class="' . $class . '">' .  $content . '</code>';

    return "$content";
}
