<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="featured" class="grid col-940">
<div class="grid col-460">
<h2 class="slide-title"><div class="caption" style="bottom:0; ">Share money<br />
  across social networks<br />
  with just a <strong>link</strong></div></h2>

<div class="call-to-action">
<a id="connectwithfacebook" href="https://m.fastacash.com/users/auth/facebook?state=link_secure_hash=" target="_blank" class=" button">
<span>Connect with Facebook</span></a> 
<br clear="all" />
<div >or <a href="https://m.fastacash.com/users/sign_up" target="_blank">sign up with your email</a></div><br />
<hr class="white"/>
<div class="small">
Download for <a href="https://itunes.apple.com/sg/app/fastacash-app/id587735283?mt=8" target="_blank" class="electricblue">iPhone</a> or <a href="https://m.fastacash.com" target="_blank"  class="electricblue">m.fastacash.com</a> for other platforms 
</div>
</div>
<!-- end of .call-to-action -->

</div>

<!-- end of .col-460 -->
<div id="featured-image" class="grid col-460 fit">
<div id="iphone"></div>
<div id="screenshot"></div>
<div id="slides">
				<div class="slides_container">
				 <div class="slide" id="1"  background="#fff827" img="/wp-content/themes/fastacash/images/1.png"> 
						<div class="caption" style="bottom:0; ">
                       	 <span class="slide1-title">
                             <strong>Share money</strong><br />
                                across social networks<br />
                                with just a <strong><u>link</u></strong>
                         </span>
                         
                         <span class="slide1-p">Share money with family and friends across social networks the same way you share stories, photos and experiences.</span>
					  	</div>
				  </div>
				
			</div><!--end of .slides_container-->
			
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	
<script type="text/javascript" src="/wp-content/themes/fastacash/js/jquery.color.js"></script>

	

<link rel='stylesheet' id='slides-css'  href='/wp-content/themes/fastacash/style/slides.css' type='text/css' media='all' />

<div class="hidden">
	<script type="text/javascript">
		<!--//--><![CDATA[//><!--
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"/wp-content/themes/fastacash/images/1.png",
				"/wp-content/themes/fastacash/images/1-2.png",
				"/wp-content/themes/fastacash/images/2.png",
				"/wp-content/themes/fastacash/images/3.png"
			)
		//--><!]]>
	</script>
</div>
<script type="text/javascript" charset="utf-8">
$(function(){
			
			var width = $(window).width();
			
			$("#screenshot").html($("<img>").attr("src", $('#'+1).attr("img")));
			$('h2').html($('#'+1+" .caption").html());
			$('#home-wrapper').animate({"background-color": $('#'+1).attr("background")}, 400);
			$(".pagination1 li#p"+1).addClass("current"); 
			
			$(window).resize(function() {
				applySlides();
			})
			
		
});
		
</script>
<!-- end of #featured-image -->

</div></div>
               
<?php /*?><?php get_sidebar('home'); ?><?php */?>
<?php get_footer(); ?>