<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClassificacaoConvidado */

$this->title = Yii::t('app', 'Cadastrar Tipo de Convidado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Classificacao Convidados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classificacao-convidado-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
