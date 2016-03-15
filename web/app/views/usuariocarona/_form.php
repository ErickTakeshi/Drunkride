<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioCarona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-carona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_idusuario')->textInput() ?>

    <?= $form->field($model, 'carona_idcarona')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
