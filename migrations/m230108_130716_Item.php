<?php

use yii\db\Migration;

/**
 * Class m230108_130716_Item
 */
class m230108_130716_Item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Item',[
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
        $this->dropTable('Item');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_130716_Item cannot be reverted.\n";

        return false;
    }
    */
}
