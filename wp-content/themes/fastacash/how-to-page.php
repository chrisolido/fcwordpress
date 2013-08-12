<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  How to  (no sidebar)
 *
 * @file           how-to-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wordpress/wp-content/themes/fastacash/how-to-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php include ('header-fullwidth.php'); ?>
    <?php responsive_in_wrapper(); // wrapper hook ?>	
<link rel='stylesheet'  href='/wp-content/themes/fastacash/style/howto.css' type='text/css' media='all' />
<div class="feature-bg" id="slide1-feature-bg">
    <div  id="content-container" class="slide1-content-container" >
    <div id="iphone"></div>
    <div id="screenshot" class="grid col-460"></div>
    <div id="slides">
                    <div class="slides_container">
                     <div class="slide" id="1"  background="#fff827" img="/wp-content/themes/fastacash/images/howto/2.png"> 
                            
                      </div>
                      <div class="slide" id="2"  background="#9fdb13" img="/wp-content/themes/fastacash/images/howto/3.png"> 
                        
                      </div>
                      <div class="slide" id="3"  background="#3be2bd" img="/wp-content/themes/fastacash/images/howto/4.png">  
                            
                      </div>
                        <div class="slide" id="4" background="#67d1ff" img="/wp-content/themes/fastacash/images/howto/5.png">  
                          
                      </div>
                    
                </div><!--end of .slides_container-->
    </div>
    <div id="featured" class="grid col-460">
        <div>
        <h2 class="slide-title">
        <div class="caption" style="bottom:0; ">
        
        With fastacash, sharing money is simple, easy and very secure with its pin-protected money link.</div></h2>
    </div> 
    <div class="howto">
      <div  id="page1" class="current" page="1">Enter the amount</div>
      <div  id="page2" page="2">A money link is created.</div>
      <div  id="page3" page="3">Attach a message or a photo.</div>
      <div  id="page4" page="4">Copy, paste and share the money<br>
        link across social networks.</div>
    </div>
    <!-- end of .col-460 -->
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        
    <script type="text/javascript" src="/wp-content/themes/fastacash/js/jquery.color.js"></script>	
    
    
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
				"/wp-content/themes/fastacash/images/howto/1.png",
				"/wp-content/themes/fastacash/images/howto/2.png",
				"/wp-content/themes/fastacash/images/howto/3.png",
				"/wp-content/themes/fastacash/images/howto/4.png",
				"/wp-content/themes/fastacash/images/howto/5.png",
				"/wp-content/themes/fastacash/images/howto/step1_current.png",
				"/wp-content/themes/fastacash/images/howto/step1.png",
				"/wp-content/themes/fastacash/images/howto/step2_current.png",
				"/wp-content/themes/fastacash/images/howto/step3.png",
				"/wp-content/themes/fastacash/images/howto/step3_current.png",
				"/wp-content/themes/fastacash/images/howto/step4.png",
				"/wp-content/themes/fastacash/images/howto/step4_current.png"
			)
		//--><!]]>
        </script>
    </div>
    <script type="text/javascript" charset="utf-8">
    $(function(){
        
                $("#screenshot").html($("<img>").attr("src", $('#'+1).attr("img")));
                $(".pagination1 li#p"+1).addClass("current"); 
                
                var current=1;
                var duration = 5000;
                var timer1;
                // Get slide number if it exists
                showSlide=function(id){
                    console.log("showSlide:"+id);
                    $('.slide-title').show();
                        $('#home-wrapper').animate({"background-color": $('#'+id).attr("background")}, 800);
                        $(".howto div").removeClass("current");
                        
                        $(".howto div#page"+id).addClass("current");
                        $("#screenshot").html($("<img>").attr("src", $('#'+id).attr("img")));
                        
                        current = id
                        timer1 = setTimeout('count()', duration); 
                }
                count=function() { 
                    if(current<5){
                        current++
                    }else{
                        current=1
                    }
                    console.log("current:"+current);
                    showSlide(current);
                    
                }
                timer1 = setTimeout('count()', duration); 
                
                
                $('.howto div').click(function(){
                    clearTimeout(timer1)
                    // get clicked, pass to animate function                    
                    clicked = $(this).attr('page').match('[^#/]+$');
                    console.log('current:'+current+'clicked:'+clicked);
                    if (current != clicked) {
                       showSlide(clicked);
                    }
                    return false;
                });
            
                
    });
            
    </script>
    <!-- end of #featured-image -->

</div></div></div>
<div class="feature-bg" style="height:auto;">
	<div class="center col-960"  style="padding-top:10px;">
    	<h1 class="orange"> Other interesting features</h1>
   </div>
    <div  id="content-container" class="slide2-content-container"  >
  	
    	<div class="grid col-260 center">
        	<img class="center" src="/wp-content/themes/fastacash/images/howto/screen1.png" width="165" height="304"  />
            <h4 class="howto-title">Add</h4>
			<p>You can top up your account by entering your credit or debit card details, or by using your Paypal account.</p>
        </div>
        <div class="grid col-260 center" >
        	<img class="center" src="/wp-content/themes/fastacash/images/howto/screen2.png" width="165" height="304"  />
             <h4 class="howto-title">Timeline</h4>
			<p>At a glance, you can see each transaction summary, history and status and all attached content. </p>
        </div>
        <div class="grid col-260 center" >
        	<img class="center" src="/wp-content/themes/fastacash/images/howto/screen3.png" width="165" height="304"  />
             <h4 class="howto-title">Spend</h4>
			<p>There are two ways you can spend right now, with more exciting ways to spend coming soon!</p>
        </div>
    
    </div>
</div>
<div class="feature-bg" style="height:240px; background-color:#fff; background-image:none;">
         <div id="content-container">
		  <div class="call-to-action  aligncenter center"  style="margin-top:60px">
                  
                <a id="connectwithfacebook" href="https://m.fastacash.com/users/auth/facebook?state=link_secure_hash=" target="_blank" class=" button">
                <span>Connect with Facebook</span></a> 
                <br clear="all" />
                <div >or <a href="https://m.fastacash.com/users/sign_up" target="_blank">sign up with your email</a></div>
                <hr class="white"/>
                <div class="small">
                Download for <a href="https://itunes.apple.com/sg/app/fastacash-app/id587735283?mt=8" target="_blank" class="electricblue">iPhone</a> or <a href="https://m.fastacash.com" target="_blank"  class="electricblue">m.fastacash.com</a> for other platforms 
                </div>
           </div>
        </div>
      </div>
    </div>
   <!-- end of #content-full -->
<?php get_footer(); ?>
