<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use common\widgets\Alert;
?>
<!-- content -->
<section id="content">
    <div class="container">
        <div class="row">
			<div class="span2"></div>
            <!-- Middle Col -->
            <div id="centercol" class="span8">
                <div class="inside">
              
<legend>User Registration</legend> 
                
<div id="system-message-container">
<div id="system-message">

<? if (Yii::$app->session->hasFlash('success')) {
	$success = Yii::$app->session->getFlash('success');
	echo \yii\bootstrap\Alert::widget([
        'body' => $success,
		'options' => [
			'class' => 'alert-info'
			],
    ]);

}
?>
</div>
</div>

<div class="registration">
	<?php $form = ActiveForm::begin([
		'options' => ['class' => 'form-horizontal'],
		'enableClientValidation' => true,
	]); ?>
				<fieldset class="well">
					
					<div class="form-group">
					<div class="control-label">
					<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Required field</label></span><span class="after"></span></span>										</div>
					<div class="controls">
						 					</div>
				</div>			
						<?php 
							
							echo $form->field($model, 'name',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:300px;'])->label('Name: *');
							echo $form->field($model, 'username',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:300px;'])->label('Username: *');
							echo $form->field($model, 'password',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->passwordInput(['style' => 'width:300px;'])->label('Password: *');
							echo $form->field($model, 'repassword',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->passwordInput(['style' => 'width:300px;'])->label('Confirm Password: *'); 
							echo $form->field($model, 'email',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:300px;'])->label('Email Address: *'); 
							echo $form->field($model, 'reemail',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:300px;'])->label('Confirm email Address: *');


echo $form->field($model, 'verifyCode',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->widget(Captcha::className(), [
                    'template' => '{image}{input}', 'options' => ['style' => 'width:300px;']
                ])->label('Captcha: *');

?>
<div class="controls">
				<?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
			<a class="btn" href="http://demo.icetheme.com/it_property2/" title="Cancel">Cancel</a>
</div>
			<input name="option" value="com_users" type="hidden">
			<input name="task" value="registration.register" type="hidden">
			<input name="79627a56c9eb9a17e110e9c56324704a" value="1" type="hidden">
											
							</fieldset>
	<?php ActiveForm::end(); ?>
</div>

                
                </div>
            
            </div><!-- / Middle Col  -->
       		            
        </div>
    
    </div>

</section><!-- /content -->
