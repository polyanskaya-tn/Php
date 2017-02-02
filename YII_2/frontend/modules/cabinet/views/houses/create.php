<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Houses */

$this->title = 'Create Houses';
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_header"); ?>

<div class="houses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?= $this->render("@frontend/modules/cabinet/views/common/cabinet_footer"); ?>
