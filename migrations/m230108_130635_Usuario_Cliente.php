<?php

use yii\db\Migration;

/**
 * Class m230108_130635_Usuario_Cliente
 */
class m230108_130635_Usuario_Cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Usuario_Cliente',[
            'id_cliente' => $this->primaryKey(),
            'id_usuario_fk' => $this->integer()->notNull(),
            'endereco_fk' => $this->integer(),
            'id_endereco_fk' => $this->integer()
        ]);


        $this->addForeignKey(
            'id_usuario_fk',
            'Usuario_Cliente',
            'id_usuario_fk',
            'Usuario',
            'id_usuario',
            'CASCADE'
        );

        $this->addForeignKey(
            'id_endereco_fk',
            'Usuario_Cliente',
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
            'Usuario_Cliente'
        );

        $this->dropForeignKey(
            'id_endereco_fk',
            'Usuario_cliente'
        );

        $this->dropTable('Usuario_Cliente');
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_130635_Usuario_Cliente cannot be reverted.\n";

        return false;
    }
    */
}
