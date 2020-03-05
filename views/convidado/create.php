<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Convidado */

$this->title = Yii::t('app', 'Cadastrar Convidado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Convidados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convidado-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
