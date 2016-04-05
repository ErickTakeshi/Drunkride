<?php

use yii\db\Migration;

class m160405_231553_alteracao_usuario extends Migration
{
    public function up()
    {
        $this->alterColumn('usuario','senha',$this->string(100));
    }

    public function down()
    {
        echo "m160405_231553_alteracao_usuario cannot be reverted.\n";

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
