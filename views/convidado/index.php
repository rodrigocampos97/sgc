<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConvidadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Convidados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convidado-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a(Yii::t('app', 'Cadastrar Convidado'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'nome',
                [
                    'attribute' => 'classificacao',
                    'content' => function($model){
                        return $model->classificacao0->nome;
                    },
                    'filter' =>  ArrayHelper::map(\app\models\ClassificacaoConvidado::find()->orderBy('nome')->all(),'id','nome'),                    
                ], 
                [
                    'attribute' => 'status',
                    'content' => function($model){
                        return (($model->status == 1 ? "Convidado" : (($model->status == 2) ? 'Convite Enviado' : (($model->status == 3) ? "Não Convidado" : (($model->status == 4) ? 'Proibido' : '')))));
                    },
                    'filter' => [1 => 'Convidado', 2 => 'Convite Enviado', 3 => 'Não Convidado', 4 => 'Excluido'],
                ],
                ['class' => 'kartik\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

