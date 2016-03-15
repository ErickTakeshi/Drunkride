<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'limite')->textInput() ?>

    <?= $form->field($model, 'caronacol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idevento')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aberto' => 'Aberto', 'Fechado' => 'Fechado', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
