<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carona */

$this->title = $model->idcarona;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Caronas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcarona], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcarona], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcarona',
            'limite',
            'caronacol',
            'idevento',
            'status',
        ],
    ]) ?>

</div>
