<?php
use yii\bootstrap\Nav;
?>
<!-- top bar --> 
<div id="topbar" class="clearfix">
	<div class="container">
		
		<!-- statistics --> 
		<div id="statistics">  
			<p>We have 2 guests and no members online</p>
		</div><!-- statistics --> 

		<!-- user name --> 
		<div id="username">  
			<p>User: <? 
if (isset($houses)) {
	foreach ($houses as $item) 
	{ 
		echo $item->number;
	}
}
else
	echo 'Guest';
?> </p>
		</div><!-- user name --> 
		
		<!-- topmenu --> 
		<div id="topmenu">
			<?
			$menuItems = [
					['label' => 'Register', 'url' => ['/realty/register']],
					['label' => 'Login', 'url' => ['/realty/login']],
					['label' => 'Contact', 'url' => ['/realty/contact']],
				];

			echo Nav::widget([
				'options' => ['class' => 'menu'],
				'items' => $menuItems,
			]);
			?>
		</div><!-- /topmenu --> 
		
		<!-- language --> 
		<div id="language">  
			<div class="mod-languages">

				<ul class="lang-inline">
					<li class="" dir="ltr">
						<a href="http://demo.icetheme.com/it_property2/">
							<img src="images/de.gif" alt="Deutsch" title="Deutsch">
						</a>
					</li>
					<li class="lang-active" dir="ltr">
						<a href="http://demo.icetheme.com/it_property2/">
							<img src="images/en.gif" alt="English (UK)" title="English (UK)">						
						</a>
					</li>
				</ul>
			</div>
		</div><!-- language --> 
    </div>
</div><!-- /top bar --> 

<!-- header -->
<header id="header">
	<div class="container">

        <div id="logo">	
        <p><a href="#"><img class="logo" src="images/logo_style1.png" alt="IT Property 2"></a></p>	
        </div>
      
      
        <div class="icemegamenu">
			<div class="nav-collapse icemegamenu ">
<?
	$menuItems = [];
	$menuItems[] = ['label' => 'Home', 'url' => ['/'], 'linkOptions' => ['class' => 'iceMenuTitle']];
	$guest = Yii::$app->user->isGuest;
	if ($guest) {
		$menuItems[] = '<li><a class="iceMenuTitle">Login</a>'.\frontend\widgets\Login::widget().'</li>';
	}
	else
	{
		$menuItems[] = ['label' => 'Admin', 'url' => ['/cabinet/houses'],
			'linkOptions' => ['class' => 'iceMenuTitle']];
		$menuItems[] = ['label' => 'Logout', 'url' => ['/realty/logout'],
			'linkOptions' => [
				'class' => 'iceMenuTitle',
				'data-method' => 'post'
			]];
	}

	echo Nav::widget([
		
		'items' => $menuItems,
		'options' => ['id' => 'icemegamenu']
		
	]);
?>
		</div></div>


<script type="text/javascript">
	jQuery(document).ready(function(){
		var browser_width1 = jQuery(window).width();
		jQuery("#icemegamenu").find(".icesubMenu").each(function(index){
			var offset1 = jQuery(this).offset();
			var xwidth1 = offset1.left + jQuery(this).width();
			if(xwidth1 >= browser_width1){
				jQuery(this).addClass("ice_righttoleft");
			}
		});
		
	})
	jQuery(window).resize(function() {
		var browser_width = jQuery(window).width();
		jQuery("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft");
		jQuery("#icemegamenu").find(".icesubMenu").each(function(index){
			var offset = jQuery(this).offset();
			var xwidth = offset.left + jQuery(this).width();
			
			if(xwidth >= browser_width){
				jQuery(this).addClass("ice_righttoleft");
			}
		});
	});
</script>
        
    











        
            
    











        
	</div>
</header><!-- /header --> 
 
