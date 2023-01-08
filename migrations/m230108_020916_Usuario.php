<?php

use yii\db\Migration;

/**
 * Class m230108_020916_Usuario
 */
class m230108_020916_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Usuario',[
            'nome' => $this->string(),
            'id_usuario' => $this->primaryKey(),

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('Usuario');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_020916_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
