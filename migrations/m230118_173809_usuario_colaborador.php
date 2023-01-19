<?php

use yii\db\Migration;

/**
 * Class m230118_173809_usuario_colaborador
 */
class m230118_173809_usuario_colaborador extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario_colaborador',[
            'id_colaborador'=> $this->primaryKey(),
            'id_usuario_fk' => $this->integer()->notNull(),
            'login' =>$this->string()->notNull(),
            'senha' =>$this->string()->notNull(),
            'permissao' =>$this->integer()
        ]);

        $this->addForeignKey(
            'id_usuario__fk',
            'usuario_colaborador',
            'id_usuario_fk',
            'usuario',
            'id_usuario',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'id_usuario__fk',
            'usuario_colaborador'
        );
        $this->dropTable('usuario_colaborador');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230118_173809_usuario_colaborador cannot be reverted.\n";

        return false;
    }
    */
}
