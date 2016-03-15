<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carona */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Carona',
]) . ' ' . $model->idcarona;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Caronas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarona, 'url' => ['view', 'id' => $model->idcarona]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="carona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
