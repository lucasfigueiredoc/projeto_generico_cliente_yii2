<?php

use yii\db\Migration;

/**
 * Class m230108_130708_Pedido
 */
class m230108_130708_Pedido extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this-> createTable('Pedido',[
            'id_pedido' => $this->primaryKey(),
            'id_usuario_colaborador_fk' => $this->integer()->notNull(),
            'id_usuario_cliente_fk'  => $this->integer()->notNull(),
          //  'id_item_fk' => $this -> ,
            'descricao' => $this->string(),
            'data' => $this ->date()

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('Pedido');


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_130708_Pedido cannot be reverted.\n";

        return false;
    }
    */
}
