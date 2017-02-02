<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use common\models\LoginForm;

class Login extends Widget
{
	public function run()
	{
		$model = new LoginForm();
		
		if ($model->load(Yii::$app->request->post()) && $model->login()) 
		{
			$controller = yii::$app->controller; 
			$controller->redirect($controller->goBack());
		}
		return $this->render('login', ['model' => $model]);
	}
}

?>
