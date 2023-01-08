<?php

use yii\db\Migration;

/**
 * Class m230108_134929_endereco
 */
class m230108_134929_endereco extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('endereco',[
            'rua' => $this->string(),
            'numero' => $this->string(),
            'CEP' => $this->string(),
            'bairro' => $this->string(),
            'cidade' => $this->string(),
            'estado' => $this->string(),
            'id_endereco' => $this->primaryKey()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('endereco');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230108_134929_endereco cannot be reverted.\n";

        return false;
    }
    */
}
