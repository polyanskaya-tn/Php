<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use yii\widgets\ActiveForm;
use yii\web\Response;

class ValidateController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs'=>[
				'class'=>VerbFilter::className(),
				'actions'=>[
					'index'=>['get','post']
				],
			],
		];
	}
	
	public function actionIndex()
	{
		$model = new LoginForm();
		
		if (Yii::$app->request->isAjax && 
			$model->load(Yii::$app->request->post()))
		{
			\Yii::$app->response->format=Response::FORMAT_JSON;
			return ActiveForm::validate($model);
		}
	}
}

?>
