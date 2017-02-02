<?php

namespace frontend\controllers;

use Yii;
//use yii\base\InvalidParamException;
//use yii\web\BadRequestHttpException;
//use yii\web\Controller;
//use yii\filters\VerbFilter;
//use yii\filters\AccessControl;


use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\LoginForm;
use common\models\Houses;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\data\Pagination;
use common\models\Search\HousesSearch;
//use frontend\models\Image;

class RealtyController extends \yii\web\Controller
{
	//public $layout = "bootstrap";

	public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

	public function actionIndex()
    {
    	$this->layout = "bootstrap";
	
		//при переключении на другую страницу результаты поиска пропадают (пропадает Post) Почему ?
		//var_dump(Yii::$app->request->post());
    	
    	$model = new HousesSearch();
		$dataProvider = $model->search(Yii::$app->request->post());
		
		//$query = Houses::find();

		$pagination = new Pagination([
			'defaultPageSize' => 8,
			'totalCount' => $dataProvider->query->count(),
		]);

		$houses = $dataProvider->query->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

    	return $this->render('index',[
			'model' => $model,	
			'houses' => $houses,
			'pagination' => $pagination,
		]);
    }

	public function actionRegister()
    {
		$this->layout = "inner";

		$model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            // valid data received in $model
			//print_r($model->getAttributes()); die;
			Yii::$app->session->setFlash('success', 'Register success');
            // do something meaningful here about $model ...

            return $this->render('register', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('register', ['model' => $model]);
        }
    }

	public function actionContact()
    {
		$this->layout = "inner";
		$model = new ContactForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			print "Send success";
		}
		return $this->render('contact', ['model' => $model]);
    }

	public function actionLogin()
    {
		$this->layout = "inner";
        $model = new LoginForm();

/*
		if (Yii::$app->request->isAjax && Yii::$app->request->isPost)
			if ($model->load(Yii::$app->request->post()))
		{
			\Yii::$app->response->format=Response::FORMAT_JSON;
			return ActiveForm::validate($model);
		}
*/


if (Yii::$app->request->isAjax && 
			$model->load(Yii::$app->request->post()))
		{
			\Yii::$app->response->format=Response::FORMAT_JSON;
			return ActiveForm::validate($model);
		}






        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->goBack();
		}

      //  } else {
        return $this->render('login', ['model' => $model]);
 //       }
    }	

	public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

	public function actionUser()
	{
		//$username = Yii::$app->user->identity->username;
		if (isset(Yii::$app->user->identity))
			print Yii::$app->user->identity->username;
		else
			print 'No User';
	}

	public function actionDetail($id)
	{
		$this->layout = "inner";
		$detail = Houses::findOne($id);

		//get user
		//$user = $detail->user;

		//echo '<pre>';
		//var_dump($house);
		//echo '</pre>';
		$search = new HousesSearch();

		if ($detail === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    	return $this->render('detail', ['house' => $detail, 'model' => $search]);
	}

	public function actionFind()
	{
    	$this->layout = "bootstrap";
	
    	$model = new HousesSearch();
		$dataProvider = $model->search(Yii::$app->request->post());

		$pagination = new Pagination([
			'defaultPageSize' => 8,
			'totalCount' => $dataProvider->query->count(),
		]);

		$houses = $dataProvider->query->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

    	return $this->render('detail_find',[
			'model' => $model,	
			'houses' => $houses,
			'pagination' => $pagination,
		]);
	}

	public function actionMy()
	{
$this->layout = "bootstrap";
		return $this->render('test');
	}
}
