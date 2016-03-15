<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioCarona */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Usuario Carona',
]) . ' ' . $model->usuario_idusuario;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuario Caronas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usuario_idusuario, 'url' => ['view', 'usuario_idusuario' => $model->usuario_idusuario, 'carona_idcarona' => $model->carona_idcarona]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="usuario-carona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
