<?php

use yii\db\Migration;

/**
 * Class m200305_023235_cria_tabelas
 */
class m200305_023235_cria_tabelas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('convidado', ['id' => $this->primaryKey(),
            'nome' => $this->string(200), 
            'classificacao' => $this->integer(),
        ], null);

        $this->createTable('classificacao_convidado', ['id' => $this->primaryKey(),
        'nome' => $this->string(200)
        ], null);

        $this->addForeignKey('fk_classificacao_convidado_fk', 'convidado', 'classificacao', 'classificacao_convidado', 'id', null, null);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200305_023235_cria_tabelas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200305_023235_cria_tabelas cannot be reverted.\n";

        return false;
    }
    */
}
