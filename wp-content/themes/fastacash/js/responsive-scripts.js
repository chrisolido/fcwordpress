/*! Responsive JS Library v1.1.0 */
/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
/*! NOTE: If you're already including a window.matchMedia polyfill via Modernizr or otherwise, you don't need this part */
window.matchMedia=window.matchMedia||(function(doc,undefined){var bool,docElem=doc.documentElement,refNode=docElem.firstElementChild||docElem.firstChild,fakeBody=doc.createElement("body"),div=doc.createElement("div");div.id="mq-test-1";div.style.cssText="position:absolute;top:-100em";fakeBody.style.background="none";fakeBody.appendChild(div);return function(q){div.innerHTML='&shy;<style media="'+q+'"> #mq-test-1 { width: 42px; }</style>';docElem.insertBefore(fakeBody,refNode);bool=div.offsetWidth==42;docElem.removeChild(fakeBody);return{matches:bool,media:q}}})(document);
/*! Respond.js v1.1.0: min/max-width media query polyfill. (c) Scott Jehl. MIT/GPLv2 Lic. j.mp/respondjs  */
(function(win){win.respond={};respond.update=function(){};respond.mediaQueriesSupported=win.matchMedia&&win.matchMedia("only all").matches;if(respond.mediaQueriesSupported){return}var doc=win.document,docElem=doc.documentElement,mediastyles=[],rules=[],appendedEls=[],parsedSheets={},resizeThrottle=30,head=doc.getElementsByTagName("head")[0]||docElem,base=doc.getElementsByTagName("base")[0],links=head.getElementsByTagName("link"),requestQueue=[],ripCSS=function(){var sheets=links,sl=sheets.length,i=0,sheet,href,media,isCSS;for(;i<sl;i++){sheet=sheets[i],href=sheet.href,media=sheet.media,isCSS=sheet.rel&&sheet.rel.toLowerCase()==="stylesheet";if(!!href&&isCSS&&!parsedSheets[href]){if(sheet.styleSheet&&sheet.styleSheet.rawCssText){translate(sheet.styleSheet.rawCssText,href,media);parsedSheets[href]=true}else{if((!/^([a-zA-Z:]*\/\/)/.test(href)&&!base)||href.replace(RegExp.$1,"").split("/")[0]===win.location.host){requestQueue.push({href:href,media:media})}}}}makeRequests()},makeRequests=function(){if(requestQueue.length){var thisRequest=requestQueue.shift();ajax(thisRequest.href,function(styles){translate(styles,thisRequest.href,thisRequest.media);parsedSheets[thisRequest.href]=true;makeRequests()})}},translate=function(styles,href,media){var qs=styles.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),ql=qs&&qs.length||0,href=href.substring(0,href.lastIndexOf("/")),repUrls=function(css){return css.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,"$1"+href+"$2$3")},useMedia=!ql&&media,i=0,j,fullq,thisq,eachq,eql;if(href.length){href+="/"}if(useMedia){ql=1}for(;i<ql;i++){j=0;if(useMedia){fullq=media;rules.push(repUrls(styles))}else{fullq=qs[i].match(/@media *([^\{]+)\{([\S\s]+?)$/)&&RegExp.$1;rules.push(RegExp.$2&&repUrls(RegExp.$2))}eachq=fullq.split(",");eql=eachq.length;for(;j<eql;j++){thisq=eachq[j];mediastyles.push({media:thisq.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/)&&RegExp.$2||"all",rules:rules.length-1,hasquery:thisq.indexOf("(")>-1,minw:thisq.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:thisq.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}}applyMedia()},lastCall,resizeDefer,getEmValue=function(){var ret,div=doc.createElement("div"),body=doc.body,fakeUsed=false;div.style.cssText="position:absolute;font-size:1em;width:1em";if(!body){body=fakeUsed=doc.createElement("body");body.style.background="none"}body.appendChild(div);docElem.insertBefore(body,docElem.firstChild);ret=div.offsetWidth;if(fakeUsed){docElem.removeChild(body)}else{body.removeChild(div)}ret=eminpx=parseFloat(ret);return ret},eminpx,applyMedia=function(fromResize){var name="clientWidth",docElemProp=docElem[name],currWidth=doc.compatMode==="CSS1Compat"&&docElemProp||doc.body[name]||docElemProp,styleBlocks={},lastLink=links[links.length-1],now=(new Date()).getTime();if(fromResize&&lastCall&&now-lastCall<resizeThrottle){clearTimeout(resizeDefer);resizeDefer=setTimeout(applyMedia,resizeThrottle);return}else{lastCall=now}for(var i in mediastyles){var thisstyle=mediastyles[i],min=thisstyle.minw,max=thisstyle.maxw,minnull=min===null,maxnull=max===null,em="em";if(!!min){min=parseFloat(min)*(min.indexOf(em)>-1?(eminpx||getEmValue()):1)}if(!!max){max=parseFloat(max)*(max.indexOf(em)>-1?(eminpx||getEmValue()):1)}if(!thisstyle.hasquery||(!minnull||!maxnull)&&(minnull||currWidth>=min)&&(maxnull||currWidth<=max)){if(!styleBlocks[thisstyle.media]){styleBlocks[thisstyle.media]=[]}styleBlocks[thisstyle.media].push(rules[thisstyle.rules])}}for(var i in appendedEls){if(appendedEls[i]&&appendedEls[i].parentNode===head){head.removeChild(appendedEls[i])}}for(var i in styleBlocks){var ss=doc.createElement("style"),css=styleBlocks[i].join("\n");ss.type="text/css";ss.media=i;head.insertBefore(ss,lastLink.nextSibling);if(ss.styleSheet){ss.styleSheet.cssText=css}else{ss.appendChild(doc.createTextNode(css))}appendedEls.push(ss)}},ajax=function(url,callback){var req=xmlHttp();if(!req){return}req.open("GET",url,true);req.onreadystatechange=function(){if(req.readyState!=4||req.status!=200&&req.status!=304){return}callback(req.responseText)};if(req.readyState==4){return}req.send(null)},xmlHttp=(function(){var xmlhttpmethod=false;try{xmlhttpmethod=new XMLHttpRequest()}catch(e){xmlhttpmethod=new ActiveXObject("Microsoft.XMLHTTP")}return function(){return xmlhttpmethod}})();ripCSS();respond.update=ripCSS;function callMedia(){applyMedia(true)}if(win.addEventListener){win.addEventListener("resize",callMedia,false)}else{if(win.attachEvent){win.attachEvent("onresize",callMedia)}}})(this);if(jQuery.browser.msie&&jQuery.browser.version<=6){jQuery('<div class="msie-box"><a href="http://browsehappy.com/" title="Click here to update" target="_blank">  Your browser is no longer supported. Click here to update...</a> </div>').appendTo("#container")}jQuery(document).ready(function($){$("a[href=#scroll-top]").click(function(){$("html, body").animate({scrollTop:0},"slow");return false})});(function($){function Placeholder(input){this.input=input;if(input.attr("type")=="password"){this.handlePassword()}$(input[0].form).submit(function(){if(input.hasClass("placeholder")&&input[0].value==input.attr("placeholder")){input[0].value=""}})}Placeholder.prototype={show:function(loading){if(this.input[0].value===""||(loading&&this.valueIsPlaceholder())){if(this.isPassword){try{this.input[0].setAttribute("type","text")}catch(e){this.input.before(this.fakePassword.show()).hide()}}this.input.addClass("placeholder");this.input[0].value=this.input.attr("placeholder")}},hide:function(){if(this.valueIsPlaceholder()&&this.input.hasClass("placeholder")){this.input.removeClass("placeholder");this.input[0].value="";if(this.isPassword){try{this.input[0].setAttribute("type","password")}catch(e){}this.input.show();this.input[0].focus()}}},valueIsPlaceholder:function(){return this.input[0].value==this.input.attr("placeholder")},handlePassword:function(){var input=this.input;input.attr("realType","password");this.isPassword=true;if($.browser.msie&&input[0].outerHTML){var fakeHTML=$(input[0].outerHTML.replace(/type=(['"])?password\1/gi,"type=$1text$1"));this.fakePassword=fakeHTML.val(input.attr("placeholder")).addClass("placeholder").focus(function(){input.trigger("focus");$(this).hide()});$(input[0].form).submit(function(){fakeHTML.remove();input.show()})}}};var NATIVE_SUPPORT=!!("placeholder" in document.createElement("input"));$.fn.placeholder=function(){return NATIVE_SUPPORT?this:this.each(function(){var input=$(this);var placeholder=new Placeholder(input);placeholder.show(true);input.focus(function(){placeholder.hide()});input.blur(function(){placeholder.show(false)});if($.browser.msie){$(window).load(function(){if(input.val()){input.removeClass("placeholder")}placeholder.show(true)});input.focus(function(){if(this.value==""){var range=this.createTextRange();range.collapse(true);range.moveStart("character",0);range.select()}})}})}})(jQuery);
/*!
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/
(function($){$.fn.fitVids=function(options){var settings={customSelector:null};var div=document.createElement("div"),ref=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0];div.className="fit-vids-style";div.innerHTML="&shy;<style>               .fluid-width-video-wrapper {                 width: 100%;                              position: relative;                       padding: 0;                            }                                                                                   .fluid-width-video-wrapper iframe,        .fluid-width-video-wrapper object,        .fluid-width-video-wrapper embed {           position: absolute;                       top: 0;                                   left: 0;                                  width: 100%;                              height: 100%;                          }                                       </style>";ref.parentNode.insertBefore(div,ref);if(options){$.extend(settings,options)}return this.each(function(){var selectors=["iframe[src*='player.vimeo.com']","iframe[src*='www.youtube.com']","iframe[src*='www.kickstarter.com']","iframe[src*='fast.wistia.com']","object","embed"];if(settings.customSelector){selectors.push(settings.customSelector)}var $allVideos=$(this).find(selectors.join(","));$allVideos.each(function(){var $this=$(this);if(this.tagName.toLowerCase()=="embed"&&$this.parent("object").length||$this.parent(".fluid-width-video-wrapper").length){return}var height=(this.tagName.toLowerCase()=="object"||$this.attr("height"))?$this.attr("height"):$this.height(),width=$this.attr("width")?$this.attr("width"):$this.width(),aspectRatio=height/width;if(!$this.attr("id")){var videoID="fitvid"+Math.floor(Math.random()*999999);$this.attr("id",videoID)}$this.wrap("<div class='fluid-width-video-wrapper'></div>").parent(".fluid-width-video-wrapper").css("padding-top",(aspectRatio*100)+"%");$this.removeAttr("height").removeAttr("width")})})}})(jQuery);
/*! Responsive Menu */
/*! http://tinynav.viljamis.com v1.1 by @viljamis */
/*(function(a,i,g){a.fn.tinyNav=function(j){var b=a.extend({active:"selected",header:"",label:""},j);return this.each(function(){g++;var h=a(this),d="tinynav"+g,f=".l_"+d,e=a("<select/>").attr("id",d).addClass("tinynav "+d);if(h.is("ul,ol")){""!==b.header&&e.append(a("<option/>").text(b.header));var c="";h.addClass("l_"+d).find("a").each(function(){c+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)c+="- ";c+=a(this).text()+"</option>"});e.append(c);
b.header||e.find(":eq("+a(f+" li").index(a(f+" li."+b.active))+")").attr("selected",!0);e.change(function(){i.location.href=a(this).val()});a(f).after(e);b.label&&e.before(a("<label/>").attr("for",d).addClass("tinynav_label "+d+"_label").append(b.label))}})}})(jQuery,this,0);*/

/*! http://tinynav.viljamis.com v1.1 by @viljamis */
(function ($, window, i) {
  $.fn.tinyNav = function (options) {

    // Default settings
    var settings = $.extend({
      'active' : 'selected', // String: Set the "active" class
      'header' : '', // String: Specify text for "header" and show header instead of the active item
      'label'  : '' // String: sets the <label> text for the <select> (if not set, no label will be added)
    }, options);

    return this.each(function () {

      // Used for namespacing
      i++;

      var $nav = $(this),
        // Namespacing
        namespace = 'tinynav',
        namespace_i = namespace + i,
        l_namespace_i = '.l_' + namespace_i,
        $select = $('<select/>').attr("id", namespace_i).addClass(namespace + ' ' + namespace_i);

      if ($nav.is('ul,ol')) {

        if (settings.header !== '') {
          $select.append(
            $('<option/>').text(settings.header)
          );
        }

        // Build options
        var options = '';

        $nav
          .addClass('l_' + namespace_i)
          .find('a')
          .each(function () {
            options += '<option value="' + $(this).attr('href') + '">';
            var j;
            for (j = 0; j < $(this).parents('ul, ol').length - 1; j++) {
              options += '- ';
            }
            options += $(this).text() + '</option>';
          });

        // Append options into a select
        $select.append(options);
 		
        // Select the active item
        if (!settings.header) {
          $select
            .find(':eq(' + $(l_namespace_i + ' li')
            .index($(l_namespace_i + ' li.' + settings.active)) + ')')
            .attr('selected', true);
        }

        // Change window location
        $select.change(function () {
          window.location.href = $(this).val();
        });

        // Inject select
        $(l_namespace_i).after($select);

        // Inject label
        if (settings.label) {
          $select.before(
            $("<label/>")
              .attr("for", namespace_i)
              .addClass(namespace + '_label ' + namespace_i + '_label')
              .append(settings.label)
          );
        }

      }
		$select.prepend('<option selected >Select</option>');
    });

  };
})(jQuery, this, 0);