<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Convidado */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => "Convidados", 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convidado-view box box-primary">
    <div class="box-header">
        <?= Html::a(Yii::t('app', 'Editar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'nome',
                [
                    'attribute' => 'classificacao',
                    'value' => (($model->classificacao0) ? $model->classificacao0->nome : null),
                ],
                [
                    'attribute' => 'status',
                    'value' => (($model->status == 1 ? "Convidado" : (($model->status == 2) ? 'Convite Enviado' : (($model->status == 3) ? "Não Convidado" : (($model->status == 4) ? 'Proibido' : ''))))),
                ],
                'apelido'
            ]
        ]) ?>
    </div>
</div>
