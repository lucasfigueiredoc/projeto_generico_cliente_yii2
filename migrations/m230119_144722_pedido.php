<?php

use yii\db\Migration;

/**
 * Class m230119_144722_pedido
 */
class m230119_144722_pedido extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pedido',[
            'id_pedido' => $this->primaryKey(),
            'fk_usuario_colaborador' => $this->integer()->notNull(),
            'fk_usuario_cliente' => $this->integer()->notNull(),
            'descricao' =>  $this->string(),
            'data' => $this->date()          

        ]);


        $this->addForeignKey(
            'fk_cliente_id',
            'pedido',
            'fk_usuario_cliente',
            'usuario_cliente',
            'id_cliente',
            'RESTRICT'

        );
        $this->addForeignKey(
            'fk_colaborador_fk',
            'pedido',
            'fk_usuario_colaborador',
            'usuario_colaborador',
            'id_colaborador',
            'RESTRICT'

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeinKey(
            'fk_cliente_id',
            'pedido'
        );

        $this->dropForeinKey(
            'fk_colaborador_fk',
            'pedido'
        );
        $this->dropTable('pedido');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230119_144722_pedido cannot be reverted.\n";

        return false;
    }
    */
}
