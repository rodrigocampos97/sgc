<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $login
 * @property string|null $senha
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'login', 'senha'], 'string', 'max' => 255],
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
            'login' => 'Login',
            'senha' => 'Senha',
        ];
    }

    public static function findByUsername($username)
    {
        $user = self::find()->where(['login' => $username])->one();

        if($user){
            return new static($user);
        }    
        return null;
    }

    public function getId()
    {
        return $this->ID;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->senha === md5($password);
    }

    public static function findIdentity($id)
    {
        $user = self::find()->where(['ID' => $id])->one();

        if($user){
            return new static($user);
        }

        return null;
    }
}
