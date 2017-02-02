<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Houses */

$this->title = 'Update Houses: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_header"); ?>

<div class="houses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_footer"); ?>
