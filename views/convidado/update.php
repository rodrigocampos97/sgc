<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Convidado */

$this->title = Yii::t('app', 'Editar {modelClass}: ', [
    'modelClass' => 'Convidado',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Convidados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Editar');
?>
<div class="convidado-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
