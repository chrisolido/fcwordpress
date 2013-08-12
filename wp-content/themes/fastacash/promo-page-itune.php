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
        		 <img src="/wp-content/themes/fastacash/images/promo/title.png" width="410" height="48" class="clearfix" />
              <h4> To give you another good reason to be jolly this Christmas, we've gifted you $5. Each week, the system will randomly select a Golden Link. The sender and receiver of the golden link will each win an Ipad mini. The more links you send, the more chance you have of your link going golden! In addition there will be daily silver links, and the winners will receive a pair of movie vouchers.
                   
          Or you can click on the iTunes button, and we can gift you songs of your choice from the Weekly Top 40.</h4> 
          <div style="float:right; font-size:11px; line-height: 12px;">No purchase is necessary to qualify for the Golden Link draw. </div>

		
 		 <div id="banner"></div> <div id="banner-text">
       	 <h4><strong>Step 1: </strong> Sign up and get $5 credited to your fastacash account</h4>
         <h4><strong>Step 2: </strong>Qualify as a golden link winner by sending a money link* to your friends. Your friends will also receive SGD $5 when they sign up for a fastacash account.</h4>
         <h4><strong>Step 3: </strong>Once the link is accepted, you and your friend will qualify for a chance to win an iPad mini!</h4>
         
         
		</div>
          <p> Just click on the SPEND button<img src="/wp-content/themes/fastacash/images/promo/spend.png" width="30" height="30" style="margin:0 5px 0 5px;"/>and select GIFT<img src="/wp-content/themes/fastacash/images/promo/itunes.png" width="30" height="30"   style="margin:0 5px 0 5px;"/>then choose your<br>
favorite songs from the list. You will be sent a gift code that can be redeemed at the Singapore iTunes store.</p>
          
       	  <a class="orange button signup" href="https://m.fastacash.com/users/sign_up">Yes, I want to sign up!</a><br />
        
       	  <a class="banner" href="/promo-terms-and-conditions">Terms & Conditions apply</a> 
</div>
       
        <div class="grid col-380" >
              <img src="/wp-content/themes/fastacash/images/promo/reindeer.png" ID="reindeer" />
		</div>

     
  
<!-- end of #content-full -->
<?php get_footer(); ?>
