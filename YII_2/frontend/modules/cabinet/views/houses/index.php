<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Search\HousesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Houses';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_header"); ?>

<div class="houses-index">

<h2><?= Html::encode($this->title) ?></h2>  


    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Houses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'number',
			'price',
            'user.email',
            // 'general_image',
            // 'description:ntext',
            // 'location',
            // 'hot',
            // 'sold',
            // 'category',
            // 'recommend',
             'created_at:date',
             'updated_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div><!--  houses-index  -->

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_footer"); ?>

