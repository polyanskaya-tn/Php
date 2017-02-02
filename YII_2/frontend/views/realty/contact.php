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

<legend>Contact Form</legend> 
                
<div id="system-message-container">
<div id="system-message">
</div>
</div>

<div class="contact">

<?php $form = ActiveForm::begin([
		'options' => ['class' => 'form-horizontal'],
		'enableClientValidation' => true,
	]); 
?>

		<fieldset class="well">
			<div class="form-group">
			<label>Send an email. All fields with an <strong class="red">*</strong> are required.</label></div>


<? 
							echo $form->field($model, 'name',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:320px;'])->label('Name *');
?>

<? 
							echo $form->field($model, 'email',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:320px;'])->label('Email *');
?>

<? 
							echo $form->field($model, 'subject',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textInput(['style' => 'width:320px;'])->label('Subject *');
?>

<? 
							echo $form->field($model, 'body',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->textarea(['cols' => '50', 'rows' => '10'])->label('Message *');
?>

<? 
							echo $form->field($model, 'isSendCopy',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->checkbox([],false)->label('Send copy to yourself');
?>

<?
	echo $form->field($model, 'verifyCode',[
								'template' => '
									<div class="control-label">{label}</div>
									<div class="controls">{input}{error}</div>'
								])->widget(Captcha::className(), [
                    'template' => '{image}{input}', 'options' => ['style' => 'width:320px;']
                ])->label('Captcha *');
?>


<div class="controls">
				<?= Html::submitButton('Send Email', ['class' => 'btn btn-primary']) ?>
</div>
				<input name="option" value="com_contact" type="hidden">
				<input name="task" value="contact.submit" type="hidden">
				<input name="return" value="" type="hidden">
				<input name="id" value="1:contact-us" type="hidden">
				<input name="79627a56c9eb9a17e110e9c56324704a" value="1" type="hidden">			
		</fieldset>
<?php ActiveForm::end(); ?>
		</div>

                
                </div>
            
            </div><!-- / Middle Col  -->
            
        </div>
    
    </div>

</section><!-- /content -->
