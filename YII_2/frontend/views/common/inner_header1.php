<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<!-- header -->
<header id="header">

    <div class="container">

             
      
        <div class="icemegamenu">
<div class="nav-collapse icemegamenu">






<?
//<div class="nav-collapse icemegamenu collapse  ">
	$menuItems = [];
	$menuItems[] = ['label' => 'Home', 'url' => ['/'], 'linkOptions' => ['class' => 'iceMenuTitle']];
	$guest = Yii::$app->user->isGuest;
	if ($guest) {
		$menuItems[] = '<li><a class="iceMenuTitle">Login</a>'.\frontend\widgets\Login::widget().'</li>';
		


/*

['label' => 'Login', 
			'url' => ['#'],
			'linkOptions' => [
				'class' => 'iceMenuTitle',
				'data-target' => '.icesubMenu',
				'data-toggle' => 'modal'
				],
			'options' => \frontend\widgets\Login::widget()
			
			]; */
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

//'options' => ['class' => 'icemegamenu'],  id="icemegamenu" 
	echo Nav::widget([
		
		'items' => $menuItems,
		'options' => ['id' => 'icemegamenu']
		
	]);

//NavBar::end();
//
?>

<ul  id="icemegamenu" class="meganizr mzr-slide mzr-responsive"><li><a class=" iceMenuTitle"><span class="icemega_title icemega_nosubtitle">Login</span></a><ul class="icesubMenu icemodules sub_level_1" style=""><li><div style="float:left;width:280px" class="iceCols"><ul><li id="iceMenu_541" class="iceMenuLiLevel_2"><div class="icemega_cover_module" style="width:280px"><div class="icemega_modulewrap" style="width:auto; "><span class="iceModuleTile">Login Form</span><form action="/it_property2/index.php" method="post" id="login-form" class="form-inline">		<div class="userdata">		<div id="form-login-username" class="control-group">			<div class="controls">									<div class="input-prepend">						<span class="add-on">							<span data-original-title="User Name" class="icon-user hasTooltip" title=""></span>							<label for="modlgn-username" class="element-invisible">User Name</label>						</span>						<input id="modlgn-username" name="username" class="input-small" tabindex="0" size="18" placeholder="User Name" type="text">					</div>							</div>		</div>		<div id="form-login-password" class="control-group">			<div class="controls">									<div class="input-prepend">						<span class="add-on">							<span data-original-title="Password" class="icon-lock hasTooltip" title="">							</span>								<label for="modlgn-passwd" class="element-invisible">Password							</label>						</span>						<input id="modlgn-passwd" name="password" class="input-small" tabindex="0" size="18" placeholder="Password" type="password">					</div>							</div>		</div>						<div id="form-login-remember" class="control-group checkbox">			<label for="modlgn-remember" class="control-label">Remember Me</label> <input id="modlgn-remember" name="remember" class="inputbox" value="yes" type="checkbox">		</div>				<div id="form-login-submit" class="control-group">			<div class="controls">				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary">Log in</button>			</div>		</div>					<ul class="unstyled">							<li>					<a href="http://demo.icetheme.com/it_property2/index.php/joomla/registration-form">					Create an account <span class="icon-arrow-right"></span></a>				</li>							<li>					<a href="http://demo.icetheme.com/it_property2/index.php/joomla/registration-form?view=remind">					Forgot your username?</a>				</li>				<li>					<a href="http://demo.icetheme.com/it_property2/index.php/joomla/registration-form?view=reset">					Forgot your password?</a>				</li>			</ul>		<input name="option" value="com_users" type="hidden">		<input name="task" value="user.login" type="hidden">		<input name="return" value="aW5kZXgucGhwP0l0ZW1pZD00MzU=" type="hidden">		<input name="08e99ca59c86f896732b0cf001e75ddb" value="1" type="hidden">	</div>	</form></div></div></li></ul></div></li></ul></li></ul>

			

</div>
</div>


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


<!-- slideshow -->
<!-- /slideshow -->


<!-- iproperty search -->
<!-- /iproperty search -->



    
<!-- promo --> 
<!-- /promo --> 
