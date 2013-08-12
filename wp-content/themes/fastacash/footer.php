<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">

	<script type="text/javascript" src="/wp-content/themes/fastacash/js/base.js"></script>
    <div id="footer-wrapper">
    
        <div class="grid col-940">
        
       <div class="grid col-540">
		<?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu')
					); 
				?>
         <?php } ?>
         </div><!-- end of col-540 -->
         
         <div class="grid col-300 fit">
         
         <ul class="social-icons">
         	
           <li style="margin-right:10px"><img src="/wp-content/themes/fastacash/images/digicert.png" width="83" height="66"  style="float:right;"  /></li>
           <ul id="social-stripe" >
           <div id="join-us" > Follow us </div>
           	<li> <a href="https://www.facebook.com/fastacash" target="_blank"><img src="/wp-content/themes/fastacash/images/footer-social-fb.png" width="30" height="30"  style="float:right;"  /></a></li>
            <li> <a href="https://twitter.com/fastacash" target="_blank"><img src="/wp-content/themes/fastacash/images/footer-social-twitter.png" width="30" height="30"  style="float:right;"  /></a></li>
           </ul>
         </ul>
         <div class=" col-940 notice clear">
       		 The Paypal service is currently unavailable. We'll keep you posted<br clear="all" />
       	  </div> 
         </div><!-- end of col-380 fit -->
          <br clear="all" />       
         </div><!-- end of col-940 -->
         <?php get_sidebar('colophon'); ?>
       
        <div class="grid col-940 copyright clear">
          fastacash © 2012-2013.&nbsp; All Rights Reserved.&nbsp; Patent Pending.<br />
          

      </div><!-- end of .copyright -->
        <div class="col-940 clear">fastacash™ is a social (peer to peer) payment service offered by Fastacash Pte Ltd.<br />Under current Singapore law, it is regarded as a stored value facility which does not require the approval of the Monetary Authority of Singapore. <br />
          Please read our <a href="/terms" target="_blank">terms and conditions</a> carefully. You can also refer to Monetary Authority of Singapore <a href="http://sg.sg/SVnNwJ" target="_blank">Stored Value Facilities Overview and Regulations</a> and <a href="http://sg.sg/SO6srl" target="_blank">Stored Value Facility Guidelines</a>.</div>
      <div class="grid col-940 scroll-top clear"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>
        
        
        
    </div><!-- end #footer-wrapper -->
    
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>