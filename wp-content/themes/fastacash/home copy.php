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
<a href="/promo/" target="_blank" class="orange button ">Sign up to <strong>get $5</strong><br /><div style="color:#fff; font-size:16px; margin-top:10px;"><strong>& stand a chance to win an iPad mini!</strong></div></a><br  class="clear" /><span style="font-size:12px; letter-spacing:-1; line-height: 11px;">Go to <a href="https://m.fastacash.com" target="_blank">m.fastacash.com</a> to access fastacash on mobile.</span> </div>
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
                         <img src="/wp-content/themes/fastacash/images/slide1-icon.png"  /><br />
                       	 <span class="slide1-title">
                             <strong>Share money</strong><br />
                                across social networks<br />
                                with just a <strong><u>link</u></strong>
                         </span>
                         
                         <span class="slide1-p">Share money with family and friends across social networks the same way you share stories, photos and experiences.</span>
					  	</div>
				  </div>
                  <div class="slide" id="2"  background="#fff827" img="/wp-content/themes/fastacash/images/1-2.png"> 
						<div class="caption" style="bottom:0; ">
                         <img src="/wp-content/themes/fastacash/images/slide1-icon.png"  /><br />
                       	 <span class="slide1-title">
                             <strong>Share money</strong><br />
                                across social networks<br />
                                with just a <strong><u>link</u></strong>
                         </span>
                         
                         <span class="slide1-p">Share money with family and friends across social networks the same way you share stories, photos and experiences.</span>
					  	</div>
				  </div>
				  <div class="slide" id="3"  background="#9fdb13" img="/wp-content/themes/fastacash/images/2.png"> 
					<div class="caption"><span class="caption" style="bottom:0; "><img src="/wp-content/themes/fastacash/images/slide1-icon.png" alt=""  /></span><br />
					  <strong>Add</strong>, You can top up your account by entering your credit or debit card details, or by using your PayPal account. </div>
				  </div>
                  <div class="slide" id="4"  background="#3be2bd" img="/wp-content/themes/fastacash/images/3.png">  
					  <div class="caption"><span class="caption" style="bottom:0; "><img src="/wp-content/themes/fastacash/images/slide1-icon.png" alt=""  /></span><br />
                        <strong>Spend</strong>, There are two modes of spending, with more spend options coming soon.</div>
				  </div>
				
			</div><!--end of .slides_container-->
			
</div><ul class="pagination1"><li id="p1"><a href="#1">1</a></li>
<li id="p3"><a href="#3">3</a></li>
<li id="p4"><a href="#4">4</a></li></ul>
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
			applySlides=function(){
				window.clearTimeout(timer1);
				clearTimeout(timer1);
				var timer1;
				console.log("width:"+width)
				if (width > 960) {
					var current=1;
					var duration = 5000;
					
					
					// Get slide number if it exists
					showSlide=function(id){
						
							console.log("showSlide:"+id);
							$('.slide-title').show();
								$(".call-to-action").show();
								$('h2').html($('#'+id+" .caption").html());
								$('#home-wrapper').animate({"background-color": $('#'+id).attr("background")}, 800);
								$(".pagination1 li").removeClass("current");
								
								$(".pagination1").find("#p"+id).addClass("current");
								$("#screenshot").html($("<img>").attr("src", $('#'+id).attr("img")));
								
								current = id;
								 window.clearTimeout(timer1);
						 		 clearTimeout(timer1);
								timer1 = setTimeout('count()', duration); 
						}
						count=function() { 
							if(current<4){
								current++
							}else{
								current=1
							}
							console.log("current:"+current);
							showSlide(current);
							
						};
						 window.clearTimeout(timer1);
						 clearTimeout(timer1);
						timer1 = setTimeout('count()', duration); 
						
						
						$('.pagination1 li a').click(function(){
							 window.clearTimeout(timer1)
							// get clicked, pass to animate function                    
							clicked = $(this).attr('href').match('[^#/]+$');
							console.log('current:'+current+'clicked:'+clicked);
							// if current slide equals clicked, don't do anything
							if (current != clicked) {
							   showSlide(clicked);
							}
							return false;
						});
				}else{
					window.clearTimeout(timer1);
						 clearTimeout(timer1);
				}
			}
			applySlides();
		
});
		
</script>
<!-- end of #featured-image -->

</div></div>
               
<?php /*?><?php get_sidebar('home'); ?><?php */?>
<?php get_footer(); ?>