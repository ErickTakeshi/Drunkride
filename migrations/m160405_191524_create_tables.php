<?php

use yii\db\Migration;

class m160405_191524_create_tables extends Migration
{
    public function up(){
			
			 $this->createTable('usuario', [
            'idusuario' => $this->primaryKey(),
            'login' => $this->string(50),
				 		'senha' => $this->string(30),
				 		'nome' => $this->string(100),
				 		'login' => $this->string(50),
				 		'telefone' => $this->string(11),
            'ativo' => $this->integer(1),
        ]);
			
			$this->createTable('evento', [
            'idevento' => $this->primaryKey(),
            'nome' => $this->string(100),
				 		'endereco' => $this->string(80),
				 		'data' => $this->dateTime(),				 		
        ]);
			
			$this->createTable('carona', [
            'idcarona' => $this->primaryKey(),
            'limite' => $this->integer(11),
				 		'caronacol' => $this->string(80),
				 		'idevento' => $this->integer(11),
						'status' => 'enum("Aberto","Fechado","gallery") NOT NULL',
        ]);
			
			$this->addForeignKey(
					'fk_carona_evento1_idx',
					'evento', 'idevento',
					'carona', 'idcarona',
					'CASCADE'
			);
			
			$this->createTable('interesse', [
            'usuario_idusuario' => $this->integer(11),
            'evento_idevento' => $this->integer(11),				 		
        ]);
			
			// add foreign key for table `carona`
			$this->addForeignKey(
					'fk_usuario_has_evento_usuario1_idx',
					'interesse', 'usuario_idusuario',
					'usuario', 'idusuario',
					'CASCADE'
			);
			
			$this->addForeignKey(
					'fk_usuario_has_evento_evento1_idx',
					'interesse', 'evento_idevento',
					'evento', 'idevento',
					'CASCADE'
			);
			
			$this->createTable('usuario_carona', [
            'usuario_idusuario' => $this->integer(11),
            'carona_idcarona' => $this->integer(11),				 		
        ]);
					
			$this->addForeignKey(
					'fk_usuario_has_carona_usuario_idx',
					'usuario_carona', 'usuario_idusuario',
					'usuario', 'idusuario',
					'CASCADE'
			);
									
			$this->addForeignKey(
					'fk_usuario_has_carona_carona1_idx',
					'usuario_carona', 'carona_idcarona',
					'carona', 'idcarona',
					'CASCADE'
			);											
			
    }

    public function down()
    {
        //TODO: DROP tables!
    }
}
