<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classificacao_convidado".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Convidado[] $convidados
 */
class ClassificacaoConvidado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classificacao_convidado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 200],
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
        ];
    }

    /**
     * Gets query for [[Convidados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConvidados()
    {
        return $this->hasMany(Convidado::className(), ['classificacao' => 'id']);
    }
}
