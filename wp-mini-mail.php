<?php
/*
Plugin Name: Mini Mail Dashboard Widget
Plugin URI: http://wordpress.org/extend/plugins/mini-mail-dashboard-widget/
Description: Send and receive e-mails on the administration panel and optionally receive SMS messages when new messages arrive
Version: 1.43
Author: Marcel Bokhorst
Author URI: http://blog.bokhorst.biz/about/
*/

/*
	Copyright 2009, 2010, 2011, 2012 Marcel Bokhorst

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

#error_reporting(E_ALL);

// Check PHP version
if (version_compare(PHP_VERSION, '5.2.4', '<'))
	die('Mini Mail requires at least PHP 5.2.4, installed version is ' . PHP_VERSION);

// Include mini mail class
if (!class_exists('WPMiniMail'))
	require_once('wp-mini-mail-class.php');

// Check pre-requisites
WPMiniMail::wpmm_check_prerequisites();

// Start plugin
global $wp_mini_mail;
$wp_mini_mail = new WPMiniMail();

// Schedule cron if needed
if (!wp_next_scheduled('wpmm_cron')) {
	$hour = intval(time() / 3600) + 1;
	wp_schedule_event($hour * 3600, 'wpmm_schedule', 'wpmm_cron');
}

add_action('wpmm_cron', 'wpmm_cron');

function wpmm_cron() {
	global $wp_mini_mail;
	$wp_mini_mail->wpmm_cron();
}

// That's it!

?>
