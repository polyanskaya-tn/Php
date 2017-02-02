<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<!-- content -->
<section id="content">
    
    <div class="container">
    
        <div class="row">
        
            <!-- Middle Col -->
            <div id="middlecol" class="span8">
            
                <div class="inside">
                
<div id="system-message-container">
<div id="system-message">
</div>
</div>

<property class="item-page">
    <div class="ip-mainheader">
        <h1 class="pull-left">
           <?=$house->number ?> <?=Html::encode("{$house->name}") ?>  <small class="ip-detail-price"><span class="ip-slashprice"><?=$house->price ?> $</span> <span class="ip-newprice">250,000 $</span></small>
        </h1>
    </div>
    <div class="clearfix"></div>

    <div class="row-fluid">
        <div class="span12">
            <div class="span7 pull-left ip-mapleft">
				<div id="propimages">
				<? if ($house->sold) : ?>
				<div class="ip-bannertopright">
					<img src="images/banner_sold.png" alt="Sold">
				</div>
				<? endif; ?>
				<a href="<?=\frontend\components\Common::getImageHouse($house,true,true)[0] ?>" data-lightbox="propslides" 
title="<?=$house->number ?> <?=Html::encode("{$house->name}") ?>">
                            <img src="<?=\frontend\components\Common::getImageHouse($house)[0] ?>" alt="<?=$house->number ?> <?=Html::encode("{$house->name}") ?>">
                        </a>
				</div>
			</div>
            <div class="span5">                
                

 <div class="well ip-mapright">
                
		<? if ($house->beds) : ?>    
        <dl class="clearfix ip-mapright-beds">
            <dt class="pull-left">Beds</dt>
            <dd class="pull-right"><?=$house->beds ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->bath) : ?> 
        <dl class="clearfix ip-mapright-baths">
            <dt class="pull-left">Baths</dt>
            <dd class="pull-right"><?=$house->bath ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->ftq) : ?> 
        <dl class="clearfix ip-mapright-formattedsqft">
            <dt class="pull-left">Ft<sup>2</sup></dt>
            <dd class="pull-right"><?=$house->ftq ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->lotsize) : ?> 
		<dl class="clearfix ip-mapright-lotsize">
            <dt class="pull-left">Lot Size</dt>
            <dd class="pull-right"><?=$house->lotsize ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->acres) : ?> 
        <dl class="clearfix ip-mapright-lot_acres">
            <dt class="pull-left">Lot Acres</dt>
            <dd class="pull-right"><?=$house->acres ?></dd>
        </dl>                
		<? endif; ?>
		<? if ($house->built) : ?> 
        <dl class="clearfix ip-mapright-yearbuilt">
            <dt class="pull-left">Year Built</dt>
            <dd class="pull-right"><?=$house->built ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->heat) : ?> 
        <dl class="clearfix ip-mapright-heat">
            <dt class="pull-left">Heat</dt>
            <dd class="pull-right"><?=Html::encode("{$house->heat}") ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->garage) : ?> 
        <dl class="clearfix ip-mapright-garage_type">
            <dt class="pull-left">Garage Type</dt>
            <dd class="pull-right"><?=Html::encode("{$house->garage}") ?></dd>
        </dl>
		<? endif; ?>
		<? if ($house->roof) : ?> 
        <dl class="clearfix ip-mapright-roof">
            <dt class="pull-left">Roof</dt>
            <dd class="pull-right"><?=Html::encode("{$house->roof}") ?></dd>
        </dl>
		<? endif; ?>



</div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ip-propdetails-divider"></div>
    <div class="row-fluid">
        <div class="span12">
            
<ul class="nav nav-tabs" id="ipDetailsTabs"><li class=" active"><a href="#propdescription" data-toggle="tab">Overview</a></li><li class=""><a href="#propdetails" data-toggle="tab">Details</a></li><li class=""><a href="#propstf" data-toggle="tab">Send to a friend</a></li><li class=""><a href="#ipfbcommentplug" data-toggle="tab">Comments</a></li><li class=""><a href="#ipfindmyschoolukplug" data-toggle="tab">Schools</a></li><li class=""><a href="#ipgalleryplug" data-toggle="tab">Gallery</a></li><li class=""><a href="#ipgplacesplug" data-toggle="tab">Google Places</a></li></ul>
<div class="tab-content" id="ipDetailsContent">
<div id="propdescription" class="tab-pane active">

<div class="row-fluid">
    <div class="span12">
        <div class="span8 pull-left ip-desc-wrapper">
            <p><?=Html::encode("{$house->description}") ?></p><hr>
                                <div class="row-fluid">
                                    <h5><strong>General Amenities</strong></h5>
                                    <div class="span12">                                        
                                        <div class="span6">
                                            <ul class="nav nav-stacked ip-amen-left"><li class="ip_checklist"><span class="icon-ok"></span> Cable Internet</li><li class="ip_checklist"><span class="icon-ok"></span> Electric Hot Water</li><li class="ip_checklist"><span class="icon-ok"></span> Grill Top</li></ul>
                                        </div>
                                        <div class="span6">
                                            <ul class="nav ip-amen-right"><li class="ip_checklist"><span class="icon-ok"></span> Propane Hot Water</li><li class="ip_checklist"><span class="icon-ok"></span> Satellite Dish</li></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <h5><strong>Interior Amenities</strong></h5>
                                    <div class="span12">                                        
                                        <div class="span6">
                                            <ul class="nav nav-stacked ip-amen-left"><li class="ip_checklist"><span class="icon-ok"></span> Central Vac</li><li class="ip_checklist"><span class="icon-ok"></span> Dishwasher</li><li class="ip_checklist"><span class="icon-ok"></span> Freezer</li><li class="ip_checklist"><span class="icon-ok"></span> Handicap Facilities</li></ul>
                                        </div>
                                        <div class="span6">
                                            <ul class="nav ip-amen-right"><li class="ip_checklist"><span class="icon-ok"></span> Microwave</li><li class="ip_checklist"><span class="icon-ok"></span> Range/Oven</li><li class="ip_checklist"><span class="icon-ok"></span> Refrigerator</li><li class="ip_checklist"><span class="icon-ok"></span> RO Combo Gas/Electric</li></ul>
                                        </div>
                                    </div>
                                </div>        </div>
                <div class="span4 ip-summary-sidecol">
            <div class="well"><div class="ip-sidecol ip-mainaddress"><address><strong>
<?=$house->number ?> <?=Html::encode("{$house->name}") ?> </strong><br><?=Html::encode("{$house->location}") ?> </address></div><div class="ip-sidecol"><b>Sale Type</b>: For Sale</div></div><div class="well"><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><img src="94%20Portland%20Rd_files/astrit_1370342793.jpg" alt="" class="thumbnail" width="400" border="0"></a><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><b>Astrit Lala</b></a><br><a href="http://demo.icetheme.com/it_property2/index.php/property?view=companyproperties&amp;id=2:icetheme-estate-2">IceTheme Estate 2</a><br><div class="clearfix"></div><br><div class="ip-sidecol sidecol-email"><b><abbr title="Email">E:</abbr></b> <script type="text/javascript">
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy24002 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;';
 addy24002 = addy24002 + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m?s&#117;bj&#101;ct=R&#101;: 94%20P&#111;rtl&#97;nd%20Rd%20';
 var addy_text24002 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;' + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m';
 document.write('<a ' + path + '\'' + prefix + ':' + addy24002 + '\'>');
 document.write(addy_text24002);
 document.write('<\/a>');
 //-->\n </script><a href="mailto:astrit.lala@icetheme.com?subject=Re:%2094%20Portland%20Rd%20">astrit.lala@icetheme.com</a><script type="text/javascript">
 <!--
 document.write('<span style=\'display: none;\'>');
 //-->
 </script><span style="display: none;">This email address is being protected from spambots. You need JavaScript enabled to view it.
 <script type="text/javascript">
 <!--
 document.write('</');
 document.write('span>');
 //-->
 </script></span></div><div class="clearfix"></div><a href="http://demo.icetheme.com/it_property2/index.php/property?view=contact&amp;id=2:astrit-lala&amp;layout=agent" class="btn pull-right ip-agent-contact-btn">Contact Agent</a><div class="clearfix"></div><div class="ip-agentqr-property" align="center"><img src="94%20Portland%20Rd_files/chart.png" alt="" class="thumbnail ip-agentqr-img"></div></div>        </div>
            </div>
</div>
</div>
<div id="propdetails" class="tab-pane">

<div class="row-fluid">
    <div class="span12">
        <div class="span8 pull-left ip_details_wrapper">
            <div class="row-fluid">
                <div class="span6">
                    <dl class="dl-horizontal">
                        <dt><strong>Beds</strong></dt>
                        <dd><?=$house->beds ?></dd>
                    </dl>
                                                            <dl class="dl-horizontal">
                        <dt><strong>Baths</strong></dt>
                        <dd><?=$house->bath ?></dd>
                    </dl>
                                                                                <dl class="dl-horizontal">
                        <dt><strong>Ft<sup>2</sup></strong></dt>
                        <dd><?=$house->ftq ?></dd>
                    </dl>
                                                                                        <dl class="dl-horizontal">
                                <dt><strong>Lot Acres</strong></dt>
                                <dd><?=Html::encode("{$house->name}") ?></dd>
                            </dl>
                                            </div>
                <div class="span6">
                                                                                                </div>
            </div>
        </div>
                <div class="span4 ip-summary-sidecol">
            <div class="well"><div class="ip-sidecol ip-mainaddress"><address><strong>94 Portland Rd </strong><br>London SE25 4PJ </address></div><div class="ip-sidecol"><b>Sale Type</b>: For Sale</div><div class="ip-sidecol"><b>Ref #</b>: 1234533</div><div class="ip-sidecol ip-categories"><b>Category:</b> <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=3:lots-and-land">Lots and Land</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=6:business-opportunities">Business Opportunities</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=4:farm-and-ranch">Farm and Ranch</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=7:bank-owened">Bank Owened</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=2:multi-family">Multi-Family</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=5:commercial-properties">Commercial Properties</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=1:residential">Residential</a></div></div><div class="well"><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><img src="94%20Portland%20Rd_files/astrit_1370342793.jpg" alt="" class="thumbnail" width="400" border="0"></a><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><b>Astrit Lala</b></a><br><a href="http://demo.icetheme.com/it_property2/index.php/property?view=companyproperties&amp;id=2:icetheme-estate-2">IceTheme Estate 2</a><br><div class="clearfix"></div><br><div class="ip-sidecol sidecol-email"><b><abbr title="Email">E:</abbr></b> <script type="text/javascript">
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy42140 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;';
 addy42140 = addy42140 + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m?s&#117;bj&#101;ct=R&#101;: 94%20P&#111;rtl&#97;nd%20Rd%20';
 var addy_text42140 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;' + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m';
 document.write('<a ' + path + '\'' + prefix + ':' + addy42140 + '\'>');
 document.write(addy_text42140);
 document.write('<\/a>');
 //-->\n </script><a href="mailto:astrit.lala@icetheme.com?subject=Re:%2094%20Portland%20Rd%20">astrit.lala@icetheme.com</a><script type="text/javascript">
 <!--
 document.write('<span style=\'display: none;\'>');
 //-->
 </script><span style="display: none;">This email address is being protected from spambots. You need JavaScript enabled to view it.
 <script type="text/javascript">
 <!--
 document.write('</');
 document.write('span>');
 //-->
 </script></span></div><div class="ip-sidecol sidecol-phone"><b><abbr title="Phone">P:</abbr></b> 855-555-0174</div><div class="ip-sidecol sidecol-cell"><b><abbr title="Mobile">M:</abbr></b> 855-555-0174</div><div class="clearfix"></div><div class="ip-sidecol sidecol-linkedin"><b><abbr title="LinkedIn">LI:</abbr></b> http://www.linkedin.com/company/icetheme</div><div class="ip-sidecol sidecol-facebook"><b><abbr title="Facebook">F:</abbr></b> http://www.facebook.com/icetheme</div><div class="clearfix"></div><a href="http://demo.icetheme.com/it_property2/index.php/property?view=contact&amp;id=2:astrit-lala&amp;layout=agent" class="btn pull-right ip-agent-contact-btn">Contact Agent</a><div class="clearfix"></div><div class="ip-agentqr-property" align="center"><img src="94%20Portland%20Rd_files/chart.png" alt="" class="thumbnail ip-agentqr-img"></div></div>        </div>
            </div>
</div>

</div>
<div id="propstf" class="tab-pane">


<div class="row-fluid">
    <div class="span12">
        <div class="span8 pull-left ip-request-wrapper">     
            <p>If you would like to send this property to a friend that 
you think may be interested, please complete the form below. To send 
this property to multiple friends, enter each email separated by a comma
 in the 'Friends Email' field.</p>
            <form name="sendTofriend" method="post" action="/it_property2/index.php/property" id="adminForm" class="form-horizontal form-validate">
                <fieldset>
                    <div class="control-group">
                        <div class="control-label"><label id="jform_ip_sender_name_stf-lbl" for="jform_ip_sender_name_stf" class=" required">Your Name<span class="star">&nbsp;*</span></label></div>
                        <div class="controls"><input name="jform[sender_name]" id="jform_ip_sender_name_stf" size="30" required="" aria-required="true" type="text"></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><label id="jform_ip_sender_email_stf-lbl" for="jform_ip_sender_email_stf" class=" required">Your Email<span class="star">&nbsp;*</span></label></div>
                        <div class="controls"><input name="jform[sender_email]" class="validate-email" id="jform_ip_sender_email_stf" size="30" required="" aria-required="true" type="email"></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><label data-original-title="&lt;strong&gt;Friend(s) Emails&lt;/strong&gt;&lt;br /&gt;Enter multiple emails separated by comma." id="jform_ip_recipient_email_stf-lbl" for="jform_ip_recipient_email_stf" class="hasTooltip required" title="">Friend(s) Emails<span class="star">&nbsp;*</span></label></div>
                        <div class="controls"><input name="jform[recipient_email]" id="jform_ip_recipient_email_stf" size="30" required="" aria-required="true" type="text"></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><label id="jform_ip_special_requests_stf-lbl" for="jform_ip_special_requests_stf" class=" required">Special Requests or Comments<span class="star">&nbsp;*</span></label></div>
                        <div class="controls"><textarea name="jform[comments]" id="jform_ip_special_requests_stf" cols="50" rows="10" required="" aria-required="true"></textarea></div>
                    </div>
                    <div id="ip-dynamic-fields-copy"></div>
                                        <div class="control-group">
                        <div class="control-label">&nbsp;</div>
                        <div class="controls"><input class="btn btn-primary" alt="Send to friends!" title="Send to friends!" value="Send to friends!" type="submit"></div>
                    </div>
                </fieldset>
                <input name="option" value="com_iproperty" type="hidden">
                <input name="view" value="property" type="hidden">
                <input name="prop_id" value="8" type="hidden">
                <input name="task" value="property.sendTofriend" type="hidden">
                <input name="layout" value="default" type="hidden">
                <input name="08e99ca59c86f896732b0cf001e75ddb" value="1" type="hidden">            </form>
        </div>
        <div class="span4 ip-summary-sidecol">
            <div class="well"><div class="ip-sidecol ip-mainaddress"><address><strong>94 Portland Rd </strong><br>London SE25 4PJ </address></div><div class="ip-sidecol"><b>Sale Type</b>: For Sale</div><div class="ip-sidecol"><b>Ref #</b>: 1234533</div><div class="ip-sidecol ip-categories"><b>Category:</b> <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=3:lots-and-land">Lots and Land</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=6:business-opportunities">Business Opportunities</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=4:farm-and-ranch">Farm and Ranch</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=7:bank-owened">Bank Owened</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=2:multi-family">Multi-Family</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=5:commercial-properties">Commercial Properties</a>, <a href="http://demo.icetheme.com/it_property2/index.php/property?view=cat&amp;id=1:residential">Residential</a></div></div><div class="well"><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><img src="94%20Portland%20Rd_files/astrit_1370342793.jpg" alt="" class="thumbnail" width="400" border="0"></a><a href="http://demo.icetheme.com/it_property2/index.php/property?view=agentproperties&amp;id=2:astrit-lala"><b>Astrit Lala</b></a><br><a href="http://demo.icetheme.com/it_property2/index.php/property?view=companyproperties&amp;id=2:icetheme-estate-2">IceTheme Estate 2</a><br><div class="clearfix"></div><br><div class="ip-sidecol sidecol-email"><b><abbr title="Email">E:</abbr></b> <script type="text/javascript">
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy44137 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;';
 addy44137 = addy44137 + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m?s&#117;bj&#101;ct=R&#101;: 94%20P&#111;rtl&#97;nd%20Rd%20';
 var addy_text44137 = '&#97;str&#105;t.l&#97;l&#97;' + '&#64;' + '&#105;c&#101;th&#101;m&#101;' + '&#46;' + 'c&#111;m';
 document.write('<a ' + path + '\'' + prefix + ':' + addy44137 + '\'>');
 document.write(addy_text44137);
 document.write('<\/a>');
 //-->\n </script><a href="mailto:astrit.lala@icetheme.com?subject=Re:%2094%20Portland%20Rd%20">astrit.lala@icetheme.com</a><script type="text/javascript">
 <!--
 document.write('<span style=\'display: none;\'>');
 //-->
 </script><span style="display: none;">This email address is being protected from spambots. You need JavaScript enabled to view it.
 <script type="text/javascript">
 <!--
 document.write('</');
 document.write('span>');
 //-->
 </script></span></div><div class="ip-sidecol sidecol-phone"><b><abbr title="Phone">P:</abbr></b> 855-555-0174</div><div class="ip-sidecol sidecol-cell"><b><abbr title="Mobile">M:</abbr></b> 855-555-0174</div><div class="clearfix"></div><div class="ip-sidecol sidecol-linkedin"><b><abbr title="LinkedIn">LI:</abbr></b> http://www.linkedin.com/company/icetheme</div><div class="ip-sidecol sidecol-facebook"><b><abbr title="Facebook">F:</abbr></b> http://www.facebook.com/icetheme</div><div class="clearfix"></div><a href="http://demo.icetheme.com/it_property2/index.php/property?view=contact&amp;id=2:astrit-lala&amp;layout=agent" class="btn pull-right ip-agent-contact-btn">Contact Agent</a><div class="clearfix"></div><div class="ip-agentqr-property" align="center"><img src="94%20Portland%20Rd_files/chart.png" alt="" class="thumbnail ip-agentqr-img"></div></div>        </div>
    </div>
</div>
</div>
<div id="ipfbcommentplug" class="tab-pane">
            <div class=" fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe src="94%20Portland%20Rd_files/bz-D0tzmBsw.html" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_http" scrolling="no" allowfullscreen="true" allowtransparency="true" name="fb_xdm_frame_http" frameborder="0"></iframe><iframe src="94%20Portland%20Rd_files/bz-D0tzmBsw_002.html" style="border: medium none;" tabindex="-1" title="Facebook Cross Domain Communication Frame" aria-hidden="true" id="fb_xdm_frame_https" scrolling="no" allowfullscreen="true" allowtransparency="true" name="fb_xdm_frame_https" frameborder="0"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div> 
            <script src="94%20Portland%20Rd_files/all.js"></script>
            <fb:comments class="fb_iframe_widget" fb-xfbml-state="rendered" href="http://demo.icetheme.com/it_property2/index.php/property?view=property&amp;id=8:portland-st-2-bed-1-bath" num_posts="5" width="600" colorscheme="light"><span style="height: 0px; width: 600px;"><iframe src="94%20Portland%20Rd_files/comments.html" class="fb_ltr" title="Facebook Social Plugin" style="border: medium none; overflow: hidden; height: 0px; width: 600px;" scrolling="no" name="f21f8cf331ba198" id="f2f28942640f0c6"></iframe></span></fb:comments>
            
</div>
<div id="ipfindmyschoolukplug" class="tab-pane">
		<table class="table table-striped">
                <thead>
                    <tr>
                        <th width="25%">School Name</th>
                        <th class="hidden-phone" width="25%">Grade Level</th>
                        <th width="25%">Distance from Listing</th>
                        <th class="hidden-phone" width="25%">Last Inspected</th>
                    </tr>
                </thead>
                <tbody>
                    
                            <tr>
                                <td><a href="http://www.findmyschool.co.uk/schooldetails.aspx?id=1720" target="_blank">Cypress Primary School</a></td>
                                <td class="hidden-phone">Primary schools</td>
                                <td>0 km</td>
                                <td class="hidden-phone">28 Jan 2010</td>
                            </tr>
                            <tr>
                                <td><a href="http://www.findmyschool.co.uk/schooldetails.aspx?id=65833" target="_blank">Harris Academy South Norwood</a></td>
                                <td class="hidden-phone">Secondary schools</td>
                                <td>0 km</td>
                                <td class="hidden-phone">20 Jan 2010</td>
                            </tr>
                            <tr>
                                <td><a href="http://www.findmyschool.co.uk/schooldetails.aspx?id=1807" target="_blank">St Chad's Catholic Primary School</a></td>
                                <td class="hidden-phone">Primary schools</td>
                                <td>0 km</td>
                                <td class="hidden-phone">15 Jul 2009</td>
                            </tr>
                            <tr>
                                <td><a href="http://www.findmyschool.co.uk/schooldetails.aspx?id=1737" target="_blank">Ryelands Primary School</a></td>
                                <td class="hidden-phone">Primary schools</td>
                                <td>0 km</td>
                                <td class="hidden-phone">11 Jul 2012</td>
                            </tr>
                            <tr>
                                <td><a href="http://www.findmyschool.co.uk/schooldetails.aspx?id=1781" target="_blank">Heavers Farm Primary School</a></td>
                                <td class="hidden-phone">Primary schools</td>
                                <td>0 km</td>
                                <td class="hidden-phone">11 Jun 2009</td>
                            </tr>                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="small" style="text-align: center;">
                            Schools information provided by: <a href="http://www.findmyschool.co.uk/" target="_blank">www.findmyschool.co.uk</a><br>
                        </td>
                    </tr>  
                </tfoot>
            </table> 
			
</div>
<div id="ipgalleryplug" class="tab-pane">

            <div class="ip-galleryplug-img pull-left thumbnail">
                <div style="width: 200px; height: 120px; overflow: hidden;">
                    <a href="http://demo.icetheme.com/it_property2/media/com_iproperty/pictures/photo_12995_2009081151b6eda946e31.jpg" title="94 Portland Rd" data-lightbox="ipgalleryslides">
                        <img src="94%20Portland%20Rd_files/photo_12995_2009081151b6eda946e31_thumb.jpg" alt="94 Portland Rd" width="200">
                    </a>
                </div>
            </div>
</div>
<div id="ipgplacesplug" class="tab-pane">
        <table id="ipgplacestable" class="table table-striped">
            <thead>
                <tr>                       
                    <th width="25%">Name</th>
                    <th class="hidden-phone" width="25%">Location</th>
                    <th width="25%">Type</th>
                    <th class="hidden-phone" width="25%">Distance</th>
                </tr>
            </thead>
            <tbody>
            <tr><td>Harding Head Start Center</td><td>411 North 15th Street #115, Coeur d'Alene</td><td>School</td><td>0.29 Miles</td></tr><tr><td>Fernan Elementary School</td><td>520 North 21st Street, Coeur d'Alene</td><td>School</td><td>0.66 Miles</td></tr><tr><td>Coeur D'Alene Superintendant</td><td>311 North 10th Street, Coeur d'Alene</td><td>School</td><td>0.31 Miles</td></tr><tr><td>Fernan Developmental Preschool</td><td>520 North 21st Street, Coeur d'Alene</td><td>School</td><td>0.66 Miles</td></tr><tr><td>Lakes Magnet Middle School</td><td>930 North 15th Street, Coeur d'Alene</td><td>School</td><td>0.67 Miles</td></tr><tr><td>North Idaho College Head Start</td><td>411 North 15th Street #107, Coeur d'Alene</td><td>Library</td><td>0.29 Miles</td></tr><tr><td>Special Education Services</td><td>311 North 10th Street, Coeur d'Alene</td><td>School</td><td>0.31 Miles</td></tr><tr><td>Sorensen Elementary School</td><td>311 North 9th Street, Coeur d'Alene</td><td>School</td><td>0.31 Miles</td></tr><tr><td>St. Thomas Parish Center</td><td>406 North 10th Street, Coeur d'Alene</td><td>School</td><td>0.31 Miles</td></tr><tr><td>Bryan Elementary School</td><td>802 East Harrison Avenue, Coeur d'Alene</td><td>School</td><td>0.97 Miles</td></tr><tr><td>Kinder-Magic</td><td>218 Miller Avenue, Coeur d'Alene</td><td>School</td><td>0.99 Miles</td></tr><tr><td>Human Rights Education Institute</td><td>414 Mullan Road, Coeur d'Alene</td><td>School</td><td>1 Miles</td></tr><tr><td>Harding Elementary School</td><td>Coeur d'Alene</td><td>School</td><td>0.3 Miles</td></tr><tr><td>Kinderquest Inc</td><td>Coeur d'Alene</td><td>School</td><td>0.68 Miles</td></tr><tr><td>Angel Academy Daycare Preschool</td><td>1614 East Hastings Avenue, Coeur d'Alene</td><td>School</td><td>0.73 Miles</td></tr></tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="small" style="text-align: center;">                            
                    </td>
                </tr>  
            </tfoot>
        </table>     
        
</div>
</div> 
        </div>
    </div>

    <div class="clearfix"></div>

    </property>


                
                </div>
            
            </div><!-- / Middle Col  -->
            
            
                  
            <!-- sidebar -->
            <aside id="sidebar" class="span4 sidebar_left">

                <div class="inside">
                
               		 <div class="sidebar_module sidebar_module_ "><h3 class="sidebar_module_heading"><span>IP Quick Search</span></h3><div class="sidebar_module_content">
<div class="ip_qsmod_holder">

<?php $form = ActiveForm::begin([
		'method' => 'post',
		'action' => ['realty/find'],
		'options' => ['class' => 'ip_quicksearch_form'],
]); ?>

        <div class="control-group">
                            <div class="controls">
<?			echo $form->field($model, 'keyword')->textInput( 
				['class' => 'input-medium ip-qssearch', 'placeholder' => 'Keyword'])->label(false); ?>
</div>
                            <div class="controls">
                    <select name="filter_stype" class="input-medium">
                        <option selected="selected" value="">Sale Type</option>
                        <option value="4">For Rent</option>
<option value="1">For Sale</option>
<option value="3">For Sale or Lease</option>
<option value="5">Sold</option>
                    </select>
                </div>
                    </div>
        <div class="control-group" id="ip-location-filters">
                                                                                </div>
        <div class="control-group">
                            <div class="controls">
<? 
	echo $form->field($model, 'beds')->dropDownList([
		'' => 'Beds',
		0 => 0,
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10
],['class' => 'input-small'])->label(false);
?>
                </div>
                                        <div class="controls">
<? 
	echo $form->field($model, 'bath')->dropDownList([
		'' => 'Baths',
		0 => 0,
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10
],['class' => 'input-small'])->label(false);
?>
                </div>
                                        <div class="controls">
                    <? 
	echo $form->field($model, 'price_min')->dropDownList([
		'' => 'Min Price',
		'0' => '0 $',
		'145000' => '145,000 $',
		'240000' => '240,000 $',
		'335000' => '335,000 $',
		'430000' => '430,000 $',
		'525000' => '525,000 $',
		'620000' => '620,000 $',
		'715000' => '715,000 $',
		'810000' => '810,000 $',
		'905000' => '905,000 $',
		'1000000' => '1,000,000 $'
],['class' => 'input-medium'])->label(false);
?>
        </div>
                <div class="controls">
                    <? 
	echo $form->field($model, 'price_max')->dropDownList([
		'' => 'Max Price',
		'50000' => '50,000 $',
		'145000' => '145,000 $',
		'240000' => '240,000 $',
		'335000' => '335,000 $',
		'430000' => '430,000 $',
		'525000' => '525,000 $',
		'620000' => '620,000 $',
		'715000' => '715,000 $',
		'810000' => '810,000 $',
		'905000' => '905,000 $',
		'1000000' => '1,000,000 $+'
],['class' => 'input-medium'])->label(false);
?>
                </div>
                                </div>
        
        <div class="ip-quicksearch-sortholder"> 
            <div class="btn-group">
                                    <a class="btn btn-info" href="#">
                        Advanced                    </a>
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>                
            </div>
        </div>
            
<?php ActiveForm::end(); ?>
</div></div></div>
                
                </div>
            
            
            </aside>
            <!-- /sidebar -->
       		            
        </div>
    
    </div>

</section><!-- /content -->
