<?php
/**
 * @package   The_Grid
 * @author    Themeone <themeone.master@gmail.com>
 * @copyright 2015 Themeone
 *
 * Skin: Doha
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH')) { 
	exit;
}

$tg_el = The_Grid_Elements();

$output  = $tg_el->get_media_wrapper_start();
	$output .= $tg_el->get_media();
	$output .= '<div class="tg-item-content">';
		$output .= $tg_el->get_overlay();
		$output .= $tg_el->get_media_button();
	$output .= '</div>';
$output .= $tg_el->get_media_wrapper_end();
		
return $output;