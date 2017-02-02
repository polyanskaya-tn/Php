<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Inner frontend application asset bundle.
 */
class InnerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css1/iceshortcodes.css',
		'css1/flexslider.css',
		'css1/bootstrap.css',
		'css1/font-awesome.css',
		'css1/bootstrap-responsive.css',
		'css1/modules.css',
		'css1/general.css',
		'css1/pages.css',
		'css1/iceiproperty.css',
		'css1/responsive.css',
		'css1/iproperty.css',
		'css1/default_icemegamenu.css',
		'css1/default_icemegamenu-reponsive.css',
    	'css1/template.css',
		'css1/template1.css',
		'css1/lightbox.css',
		'css1/font-awesome.css',
		'css/style1.css',
		'css/style1_responsive.css',
		'css/css.css',
    ];

/*
			'js/ga.js',	
			'js/widgets.js',

			'js/cbgapi.loaded_0',
			'js/pinit_main.js',
			'js/ipcommon.js',
			'js/ga_002.js',
			'js/jquery-noconflict.js',
			'js/jquery-migrate.js',
			//'js/bootstrap.js',
			'js/mootools-core.js',
			'js/core.js',
			'js/mootools-more.js',
			'js/punycode.js',
			'js/validate.js',
			'js/addthis_widget.js',
			'js/lightbox-2.js',
			'js/js',
			'js/property_gmap.js',
			'js/directions_002.js',
			'js/streetview_002.js',
			'js/html5fallback.js',
			'js/fbcomment.js',
			'js/googleplaces.js',
			'js/plusone.js',
			//'js/jquery.js',
			'js/jcombo_qs.js',
*/
    public $js = [
			'js/ga.js',	
			'js/widgets.js',

			'js/cbgapi.loaded_0',
			'js/pinit_main.js',
			'js/ipcommon.js',
			'js/ga_002.js',
			'js/jquery-noconflict.js',
			'js/jquery-migrate.js',
			//'js/bootstrap.js',
			'js/mootools-core.js',
			'js/core.js',
			'js/mootools-more.js',
			'js/punycode.js',
			'js/validate.js',
			'js/addthis_widget.js',
			'js/lightbox-2.js',
			'js/js',
			'js/property_gmap.js',
			'js/directions_002.js',
			'js/streetview_002.js',
			'js/html5fallback.js',
			'js/fbcomment.js',
			'js/googleplaces.js',
			'js/plusone.js',
			//'js/jquery.js',
			'js/jcombo_qs.js',
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
