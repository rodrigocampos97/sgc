<?php

use yii\db\Migration;

/**
 * Class m200306_164937_criando_permicoes
 */
class m200306_164937_criando_permicoes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        // adciona a permissão "createPost"
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);
 
        // adciona a permissão  "updatePost"
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // adciona a permissão "deletePost"
        $deletePost = $auth->createPermission('deletePost');
        $deletePost->description = 'delete a post';
        $auth->add($deletePost);
 
        // adciona a permissão  "viewPost"
        $viewPost = $auth->createPermission('viewPost');
        $viewPost->description = 'view post';
        $auth->add($viewPost);

        $gerente = $auth->createRole('gerente');
        $auth->add($gerente);
        $auth->addChild($gerente, $createPost, $updatePost, $deletePost, $viewPost);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $gerente);

        $user = new \app\models\User();
        $user->nome = "Admin";
        $user->login = "rodrigoecamila";
        $user->senha = "rodrigoecamila";
        $user->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200306_164937_criando_permicoes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200306_164937_criando_permicoes cannot be reverted.\n";

        return false;
    }
    */
}
