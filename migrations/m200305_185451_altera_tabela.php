<?php

use yii\db\Migration;

/**
 * Class m200305_185451_altera_tabela
 */
class m200305_185451_altera_tabela extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('convidado', 'status', $this->string(30));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200305_185451_altera_tabela cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200305_185451_altera_tabela cannot be reverted.\n";

        return false;
    }
    */
}
