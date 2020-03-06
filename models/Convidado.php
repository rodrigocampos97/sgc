<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convidado".
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $classificacao
 *
 * @property ClassificacaoConvidado $classificacao0
 */
class Convidado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'convidado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classificacao'], 'integer'],
            [['nome'], 'string', 'max' => 200],
            [['status', 'apelido'], 'safe'],
            [['classificacao'], 'exist', 'skipOnError' => true, 'targetClass' => ClassificacaoConvidado::className(), 'targetAttribute' => ['classificacao' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'classificacao' => 'Tipo de Convidado',
        ];
    }

    /**
     * Gets query for [[Classificacao0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassificacao0()
    {
        return $this->hasOne(ClassificacaoConvidado::className(), ['id' => 'classificacao']);
    }
}
