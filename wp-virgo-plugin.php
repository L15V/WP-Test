<?php
include 'nieuws.php';
/*
Plugin Name: Virgo Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Plugin voor alle dynamische delen van de Virgo website
Version: 0.0.2
Author: Lars Verhulst
Author URI: http://larsverhulst.nl
License: A "Slug" license name e.g. GPL2
*/


add_shortcode('virgo_nieuws_latest', 'getLatestNews');
?>