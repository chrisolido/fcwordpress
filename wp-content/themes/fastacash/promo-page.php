<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Promo Page (no sidebar)
 *
 * @file           promo-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wordpress/wp-content/themes/fastacash/promo-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php include ('header-fullwidth.php'); ?>
    <?php responsive_in_wrapper(); // wrapper hook ?>	
    <link rel='stylesheet' id='promo-css'  href='/wp-content/themes/fastacash/style/promo.css' type='text/css' media='all' />
    
        <div id="content-container" class="hfeed">
        <div class="grid col-540 fit" id="featured ">
        		 <h1>Win an iPad mini!</h1>
              <h4> To celebrate the new year, we've gifted you $5. Each week, the system will randomly select a Golden Link. The sender and receiver of the golden link will each win an ipad mini. The more links you send, the more chance you have of your link going golden! In addition there will be daily silver links, and the winners will receive a pair of movie vouchers.</h4> 
          <div style="float:right; font-size:11px; line-height: 12px;color: #fff;">No purchase is necessary to qualify for the Golden Link draw. </div>

		
 		 <div id="banner"></div> <div id="banner-text">
       	 <h4><strong>Step 1:</strong> Sign up and get $5 credited to your fastacash account.</h4>
         <h4><strong>Step 2: </strong>Qualify as a golden link winner by sending a money link* to your friends. Your friends will also receive SGD $5 when they sign up for a fastacash account.</h4>
         <h4><strong>Step 3: </strong>Once the link is accepted, you and your friend will qualify for a chance to win an iPad mini!</h4>
         
         
		</div>
         <div class="call-to-action">
<a href="https://m.fastacash.com" target="_self" class="orange button">Sign up now via facebook now!</a></div>
<div id="itunestore"><a href="
https://itunes.apple.com/sg/app/fastacash-app/id587735283?mt=8" target="_blank"><img src="/wp-content/themes/fastacash/images/appstore.png" alt=""  /></a></div><div style="float:left; height:auto; padding:15px 10px 10px 10px; color: #fff">OR</div><div id="mfastacashcom"> <a href="https://m.fastacash.com" target="_blank">Other mobile platforms at<br  />
    <strong>m.fastacash.com</strong></a> </div><br /><br clear="all"/><br clear="all"/>
       	  <a class="banner" href="/promo-terms-and-conditions">Terms & Conditions apply</a> 
</div></div>
      

     
  
<!-- end of #content-full -->
<?php get_footer(); ?>
