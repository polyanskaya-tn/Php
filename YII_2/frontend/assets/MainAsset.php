<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/iceshortcodes.css',
		'css/flexslider.css',
		'css/bootstrap.css',
		'css/font-awesome.css',
		'css/bootstrap-responsive.css',
		'css/modules.css',
		'css/general.css',
		'css/pages.css',
		'css/iceiproperty.css',
		'css/responsive.css',
		'css/iproperty.css',
		'css/style.css',
		'css/default_icemegamenu.css',
		'css/default_icemegamenu-reponsive.css',
        'css/template.css',
		'css/template1.css',
		'css/css.css',
		'css/style1.css',
		'css/style1_responsive.css',
    ];



/*
'js/ga_005.js',
		'js/ga_004.js',
		'js/ga_003.js',
		'js/ga_002.js',
		'js/ga.js',

'js/all.js',
		'js/tabs-state.js',
		'js/caption.js',
*/

//for	detail page	

    public $js = [



		
    ];
    public $depends = [
        'yii\web\YiiAsset',		//yii.js, jquery.js 
        //'yii\bootstrap\BootstrapAsset',		//bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset',		//bootstrap.js
    ];
	public $jsOptions = [
		'position' => \yii\web\View::POS_HEAD,
	];
}
