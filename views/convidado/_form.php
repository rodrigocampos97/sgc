<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\select2;


/* @var $this yii\web\View */
/* @var $model app\models\Convidado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convidado-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'classificacao')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(\app\models\ClassificacaoConvidado::find()->orderBy('nome')->all(),'id','nome'),
            'options' => ['placeholder' => 'Selecione o tipo de convidado'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
            'data' => [1 => 'Convidado', 2 => 'Convite Enviado', 3 => 'Não Convidado', 4 => 'Proibido'],
            'options' => ['placeholder' => 'Selecione o status do convite'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


    </div>
    <div class="box-footer">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['index'], ['class' => 'btn btn-danger']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
