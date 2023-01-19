<?php

use yii\db\Migration;

/**
 * Class m230118_173801_usuario_cliente
 */
class m230118_173801_usuario_cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario_cliente',[
            'id_cliente' => $this->primaryKey(),
            'id_usuario_fk' => $this->integer()->notNull(),
            'endereco_fk' => $this->integer(),
            'id_endereco_fk' => $this->integer()
        ]);


        $this->addForeignKey(
            'id_usuario_fk',
            'usuario_cliente',
            'id_usuario_fk',
            'usuario',
            'id_usuario',
            'CASCADE'
        );

        $this->addForeignKey(
            'id_endereco_fk',
            'usuario_cliente',
            'id_endereco_fk',
            'endereco',
            'id_endereco',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'id_usuario_fk',
            'usuario_cliente'
        );

        $this->dropForeignKey(
            'id_endereco_fk',
            'usuario_cliente'
        );

        $this->dropTable('usuario_cliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230118_173801_usuario_cliente cannot be reverted.\n";

        return false;
    }
    */
}
