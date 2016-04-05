<?php

use yii\db\Migration;

class m160405_224052_insert extends Migration
{
    public function up()
    {
        $this->addColumn('carona','idCriador',$this->integer(11));
        $this->addForeignKey('fk_idCriador','carona', 'idCriador','usuario','idusuario');
    }

    public function down()
    {
        
        $this->dropForeignKey('fk_idCriador','usuario_carona');
        $this->dropColumn('usuario_carona','idCriador');
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
