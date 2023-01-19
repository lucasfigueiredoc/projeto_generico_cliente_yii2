<?php

use yii\db\Migration;

/**
 * Class m230118_173751_usuario
 */
class m230118_173751_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario',[
            'nome' => $this->string()->notNull(),
            'id_usuario' => $this->primaryKey(),
            'telefone' => $this->char()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230118_173751_usuario cannot be reverted.\n";

        return false;
    }
    */
}
