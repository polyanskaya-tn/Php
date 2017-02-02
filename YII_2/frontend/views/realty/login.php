<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!-- content -->
<section id="content">    
    <div class="container">
    
        <div class="row">
        
			<div class="span2"></div>
            <!-- Middle Col -->
            <div id="centercol" class="span8">
            
                <div class="inside">

<div id="system-message-container">
<div id="system-message">
</div>
</div>
                <div class="login ">

	<?php //
		$form = ActiveForm::begin([
		'enableAjaxValidation' => true,
		'enableClientValidation' => false,
		'options' => ['class' => 'form-horizontal'],
	]); ?>
		<fieldset class="well">

												<div class="control-group">
<?						
	echo $form->field($model, 'username',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:300px;'])->label('User Name *');
	echo $form->field($model, 'password',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->passwordInput(['style' => 'width:300px;'])->label('Password *');

?>

<?
echo $form->field($model, 'rememberMe',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->checkbox([],false)->label('Remember me');
?>
<div class="controls">
<?= Html::submitButton('Log in', ['class' => 'btn btn-primary']) ?>
</div>
</div>
			<input name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fdXNlcnMmdmlldz1wcm9maWxl" type="hidden">
			<input name="79627a56c9eb9a17e110e9c56324704a" value="1" type="hidden">		</fieldset>
	<?php ActiveForm::end(); ?>
</div>
<div>
	<ul class="nav nav-tabs nav-stacked">
		<li>
			<a href="#">
			Forgot your password?</a>
		</li>
		<li>
			<a href="#">
			Forgot your username?</a>
		</li>
				<li>
			<a href="#">
				Don't have an account?</a>
		</li>
			</ul>
</div>

                
                </div>
            
            </div><!-- / Middle Col  -->
 		            
        </div>
    
    </div>
</section><!-- /content -->

