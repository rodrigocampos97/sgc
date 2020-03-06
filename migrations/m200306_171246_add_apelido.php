<?php

use yii\db\Migration;

/**
 * Class m200306_171246_add_apelido
 */
class m200306_171246_add_apelido extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('convidado', 'apelido', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200306_171246_add_apelido cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200306_171246_add_apelido cannot be reverted.\n";

        return false;
    }
    */
}
