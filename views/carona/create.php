<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carona */

$this->title = Yii::t('app', 'Create Carona');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Caronas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carona-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
