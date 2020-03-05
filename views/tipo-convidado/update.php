<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassificacaoConvidado */

$this->title = Yii::t('app', 'Editar {modelClass}: ', [
    'modelClass' => 'Tipo de Convidado',
]) . $model->nome;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo de Convidado'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Editar');
?>
<div class="classificacao-convidado-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
