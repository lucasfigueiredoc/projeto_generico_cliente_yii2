<?php

use yii\db\Migration;

/**
 * Class m230108_130657_Usuario_Colaborador
 */
class m230108_130657_Usuario_Colaborador extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Usuario_Colaborador',[
            'id_colaborador'=> $this->primaryKey(),
            'id_usuario_fk' => $this->integer()->notNull(),
            'login' =>$this->string()->notNull(),
            'senha' =>$this->string()->notNull(),
            'permissao' =>$this->integer()
        ]);

        $this->addForeignKey(
            'id_usuario_fk',
            'Usuario_Colaborador',
            'id_usuario_fk',
            'Usuario',
            'id_usuarioo',
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
            'Usuario_Colaborador'
        );
        $this->dropTable('Usuario_Colaborador');


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_130657_Usuario_Colaborador cannot be reverted.\n";

        return false;
    }
    */
}
