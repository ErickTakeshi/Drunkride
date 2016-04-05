<?php

use yii\db\Migration;

class m160405_195146_insert_users extends Migration
{
    public function safeUp()
    {
				$this->insert('usuario', [
            'idusuario' => 1,
						'login' => 'admin',
						'senha' => '21232f297a57a5a743894a0e4a801f',
						'nome' => 'Administrador',
						'telefone' => '',
						'ativo' => 1,
        ]);
			
			$this->insert('usuario', [
				'idusuario' => 2,
				'login' => 'user',
				'senha' => '81dc9bdb52d04dc20036dbd8313ed0',
				'nome' => 'Usuario',
				'telefone' => '',
				'ativo' => 1,
			]);					
    }

    public function safeDown()
    {
        echo "m160405_195146_insert_users cannot be reverted.\n";

        return false;
    }

}
