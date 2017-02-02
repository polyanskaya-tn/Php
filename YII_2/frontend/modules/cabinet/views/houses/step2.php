<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

$this->title = 'Create Houses : Step 2';
?>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_header"); ?>

<div class="houses-create">
<h2><?= Html::encode($this->title) ?></h2>

	<?php $form = ActiveForm::begin(); 
	?>
	
	<?
		// echo Url::to(['file-upload-general']); -> /index.php?r=cabinet%2Fhouses%2Ffile-upload-general
		// 'initialPreview'=>$images -> array of image for preview

		echo $form->field($model, 'general_image')->widget(FileInput::classname(), [
    		'options' => ['accept' => 'image/*'],
			'pluginOptions' => [
				'uploadUrl' => Url::to(['file-upload-general']),
				'uploadExtraData' => ['house_id' => $model->id],
				'allowedFileExtensions' => ['jpg','png','gif'],
				'initialPreview'=>$images,				
				'showUpload' => true,
				'showRemove' => false,
				'dropZoneEnabled' => false	
			],
		]);
	?>
		
	<? echo Html::label('Images'); ?>
		
	<? echo FileInput::widget([
			'name' => 'images',
			'options' => [
				'accept' => 'image/*',
				'multiple' => true
			],
			'pluginOptions' => [
				'uploadUrl' => Url::to(['file-upload-images']),
				'uploadExtraData' => ['house_id' => $model->id],
				'overwriteInitial' => false,
				'allowedFileExtensions' => ['jpg','png','gif'],
				'initialPreview'=>$images_add,
				'showUpload' => true,
				'showRemove' => false,
				'dropZoneEnabled' => false	
			]
		]);
	?>

	<div class="form-actions">
	<? echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', 
			['class' => $model->isNewRecord ? 'btn' : 'btn btn-primary']) ?>
	<a class="btn" href="http://demo.icetheme.com/it_property2/" title="Cancel">Cancel</a>
	</div>
		
	<?php ActiveForm::end(); ?>
</div>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_footer"); ?>
