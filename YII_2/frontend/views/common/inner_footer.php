<?php

use yii\helpers\Url;

?>

<!-- bottom --> 
    
<!-- Message -->
<section id="message">

    <div class="message_wraper">
    
        <div class="container">
        
            

<div class="custom">
	<h2>We have teamed up to provide you Smart Home Loans</h2>
<a class="button apply" href="<?= Url::to(['/realty/contact']) ?>">Contact Us »</a></div>

            
        </div>
     
    </div>
        
</section><!-- /message --> 
    
        
    
<!-- footer --> 

<footer id="footer">

    <div class="container">
    	
         
                
        <!-- copyright -->    
        <div id="copyright_area" class="clearfix">  
        
                        <div id="copyrightmenu">
            

            </div>
             
            
            <p id="copyright">
            © 2016
            </p>
            
                        <p id="icelogo">
            <a href="#" target="_blank" title="We would like to inform that this website is designed by IceTheme.com with the latest standards provied by the World Wide Web Consortium (W3C)"></a></p>
             
                
        </div><!-- copyright -->  
        
    </div>
   
</footer><!-- /footer --> 

<div id="gotop" class="">
    <a href="#" class="scrollup">Go Top</a>
</div>
  

 
    
 
<script type="text/javascript">  
jQuery.fn.styleSwitcher = function(){
	jQuery(this).click(function(){
		loadStyleSheet(this);
		return false;
	});
	function loadStyleSheet(obj) {
		jQuery('body').append('<div id="overlay" />');
		jQuery('body').css({height:'100%'});
		jQuery('#overlay')
			.fadeIn(500,function(){
				/* change the default style */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#stylesheet').attr('href','/it_property2/templates/it_property2/css/styles/' + data + '.css');
					cssDummy.check(function(){
						jQuery('#overlay').fadeOut(1000,function(){
							jQuery(this).remove();
						});	
					});
				});
				/* change the responsive style */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#stylesheet-responsive').attr('href','/it_property2/templates/it_property2/css/styles/' + data + '_responsive.css');
					
					cssDummy.check(function(){
						jQuery('#overlay').fadeOut(1000,function(){
							jQuery(this).remove();
						});	
					});
				});
				
					/* change the logo for demo */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#logo img').attr('src','/it_property2/images/sampledata/icetheme/demo/logo_' + data + '.png');
				}); 
				
				/* change the banners for demo */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#banner .banner:nth-child(1) img').attr('src','/it_property2/images/sampledata/icetheme/demo/banner1_' + data + '.jpg');
				}); 
				
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#banner .banner:nth-child(2) img').attr('src','/it_property2/images/sampledata/icetheme/demo/banner2_' + data + '.jpg');
				}); 
				
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#banner .banner:nth-child(3) img').attr('src','/it_property2/images/sampledata/icetheme/demo/banner3_' + data + '.jpg');
				}); 
				
			});
	}
	var cssDummy = {
		init: function(){
			jQuery('<div id="dummy-element" style="display:none" />').appendTo('body');
		},
		check: function(callback) {
			if (jQuery('#dummy-element').width()==2) callback();
			else setTimeout(function(){cssDummy.check(callback)}, 200);
		}
	}
	cssDummy.init();
}
	jQuery('.ice-template-style a').styleSwitcher(); 
	jQuery('#ice-switcher a').styleSwitcher(); 
</script><div id="dummy-element" style="display:none"></div><div id="dummy-element" style="display:none"></div>  

<!-- Google Analytics -->  
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31764391-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<!-- Google Analytics -->  



<div style="display: none;" id="lightboxOverlay" class="lightboxOverlay"></div><div style="display: none;" id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src=""><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><iframe tabindex="-1" style="width: 1px; height: 1px; position: absolute; top: -100px;" src="94%20Portland%20Rd_files/postmessageRelay.html" id="oauth2relay918209597" name="oauth2relay918209597"></iframe></body></html>
