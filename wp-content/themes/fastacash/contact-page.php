<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Contact Page (no sidebar)
 *
 * @file           contact-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wordpress/wp-content/themes/responsive/contact-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php include ('header-fullwidth.php'); ?>
<?php responsive_in_wrapper(); // wrapper hook ?>	
<?php if (function_exists('contact_coldform_public')) contact_coldform_public(); ?>
   <!-- end of #content-full -->
<?php get_footer(); ?>
