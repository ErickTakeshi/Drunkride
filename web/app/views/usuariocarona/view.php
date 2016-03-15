<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioCarona */

$this->title = $model->usuario_idusuario;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuario Caronas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-carona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'usuario_idusuario' => $model->usuario_idusuario, 'carona_idcarona' => $model->carona_idcarona], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'usuario_idusuario' => $model->usuario_idusuario, 'carona_idcarona' => $model->carona_idcarona], [
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
            'usuario_idusuario',
            'carona_idcarona',
        ],
    ]) ?>

</div>
