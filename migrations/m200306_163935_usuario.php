<?php

use yii\db\Migration;

/**
 * Class m200306_163935_usuario
 */
class m200306_163935_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuarios', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(),
            'login' => $this->string(),
            'senha' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200306_163935_usuario cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200306_163935_usuario cannot be reverted.\n";

        return false;
    }
    */
}
