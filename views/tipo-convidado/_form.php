<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassificacaoConvidado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classificacao-convidado-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'cancelar'), ['index'], ['class' => 'btn btn-danger']) ?>

    </div>
    <?php ActiveForm::end(); ?>
</div>
