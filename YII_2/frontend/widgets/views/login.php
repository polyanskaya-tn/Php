<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<ul class="icesubMenu icemodules sub_level_1 ice_righttoleft" style="width:280px">
<li>
	<div style="float:left;width:280px" class="iceCols">
	<ul>
	<li id="iceMenu_541" class="iceMenuLiLevel_2">
		<div class="icemega_cover_module" style="width:280px">
			<div class="icemega_modulewrap" style="width:auto; ">
				<span class="iceModuleTile">Login Form</span>

<?php $form = ActiveForm::begin([
		'enableAjaxValidation' => true,
		'validationUrl'=>yii\helpers\Url::to(['/validate/index']),
		'options' => [
			'class' => 'form-inline',
			'id' => 'login-form'
		],
	]); ?>

	<div class="userdata">
		<div id="form-login-username" class="control-group">
			<div class="controls">									
				<div class="input-prepend">						
				<span class="add-on">							
					<span data-original-title="User Name" class="icon-user hasTooltip" title=""></span>
					<label for="modlgn-username" class="element-invisible"> </label>						
				</span>	
			
<?= $form->field($model, 'username')->textInput([
	'class' => 'input-small',
	'tabindex'=>'0',
	'size'=>'22',
	'placeholder'=>'User Name',
	'id'=>'modlgn-username'
])->label(false) ?>


				
				</div>							
			</div>		
		</div>		

		<div id="form-login-password" class="control-group">			
			<div class="controls">									
				<div class="input-prepend">
				<span class="add-on">							
				<span data-original-title="Password" class="icon-lock hasTooltip" title=""></span>
				<label for="modlgn-passwd" class="element-invisible"> </label>
</span>				

<?= $form->field($model, 'password')->passwordInput([
	'class' => 'input-small',
	'tabindex'=>'0',
	'size'=>'22',
	'placeholder'=>'Password'
])->label(false) ?>
				</div>

			</div>
		</div>

		<div id="form-login-remember" class="control-group checkbox">
			<label for="modlgn-remember" class="control-label"></label>
			
<?= $form->field($model, 'rememberMe')->checkbox([
	'class' => 'inputbox'
],false)->label('Remember me'); ?>


		</div>
		<div id="form-login-submit" class="control-group">
			<div class="controls">
			<?= Html::submitButton('Log in', ['class' => 'btn btn-primary']) ?>
			</div>
		</div>

		<ul class="unstyled">
		<li><a href="<?= Yii\helpers\Url::to('/realty/register') ?>">Create an account </a></li>
		<li><a href="#">Forgot your username?</a></li>
		<li><a href="#">Forgot your password?</a></li>
		</ul>
		<input name="option" value="com_users" type="hidden">
		<input name="task" value="user.login" type="hidden">
		<input name="return" value="aW5kZXgucGhwP0l0ZW1pZD00MzU=" type="hidden">
		<input name="dbf843b825bae5be63f1951648108721" value="1" type="hidden">
	</div>
<?php ActiveForm::end(); ?>

</div></div></li></ul></div></li></ul>
