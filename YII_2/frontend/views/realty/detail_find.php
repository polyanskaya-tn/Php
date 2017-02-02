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
                

<!-- promo --> 
<section id="promo">
    <div class="container">
        <? 
			$count = 0;
			foreach ($houses as $item) : 
				if ($count%2 == 0) : ?>
		<div class="row">	
		<? 
				endif;
				$count++;
				
		?>

           <div class="span3 promo">	
		     <div class="moduletable">
        
<a href="<?= Url::to(['/realty/detail']).'&id='.$item->id ?>">
			 <h3 class="mod-title">
					<?=$item->number ?> <?=Html::encode("{$item->name}") ?>
			</h3>
</a>

             <div class="moduletable_content clearfix">
             	<div style="width: 198px; float: left; display: block; margin: 10px 0 20px 0;" class="ip-recentproperties-holder clone">
        
                <div class="ip-mod-thumb ip-recentproperties-thumb-holder">
                    <a href="<?= Url::to(['/realty/detail']).'&id='.$item->id ?>">
						<img src="<?=\frontend\components\Common::getImageHouse($item)[0] ?>" alt="94 Portland Rd " class="ip-recentproperties-thumb thumbnail">
					</a>

<? if ($item->sold) : ?>
	<div class="ip-bannertopright"><img src="images/banner_sold.png" alt="Sold"></div>
<? endif; ?>
                </div>
                <div class="ip-mod-desc ip-recentproperties-desc-holder span9">
		            <em><?=Html::encode("{$item->location}") ?></em>
		            <p><?=Html::encode("{$item->description}") ?></p>
		            <div class="ip-mod-price"><span class="ip-slashprice"><?=$item->price ?> $</span> 
					<span class="ip-newprice">250,000 $</span></div>
                </div>
            
        		</div>
<script type="text/javascript">
// Can also be used with $(document).ready()

(function($) {
	$(window).load(function(){
		$('#ip_carousel267').flexslider({
		selector: ".slides > div", 
		animation: "slide",
		direction: "horizontal",
		itemWidth:0,
		animationspeed:500,  
		itemMargin:0,
		minItems:1,
		maxItems:0,
		directionNav: false,
		move: 0,    
		slideshow: false,
		
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
   })(jQuery);
</script>             
				</div>
			</div>
	     </div> 
                        
                       
<? if ($count%2 == 0) : ?>
		</div>	
<? 
	endif;                        
	endforeach; 
	if ($count%2 != 0) echo '</div>'; 
?>	
          
     <?= LinkPager::widget(['pagination' => $pagination]) ?>        
         
    </div> 
    
</section>
 <!-- /promo --> 

                
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
