<?php

use yii\db\Migration;

/**
 * Class m230118_173739_item
 */
class m230118_173739_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item',[
            'id_item' =>  $this->primaryKey(),
            'valor' => $this->integer()->notNull(),
            'nome' => $this->integer()->notNull(),
            'descricao' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230118_173739_item cannot be reverted.\n";

        return false;
    }
    */
}
