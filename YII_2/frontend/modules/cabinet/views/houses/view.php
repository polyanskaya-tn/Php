<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Houses */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_header"); ?>

<div class="houses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'price',
            'user.email',
            'name',
            'number',
            'general_image',
            'description:ntext',
            'location',
            'hot',
            'sold',
            'category',
            'recommend',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_footer"); ?>

