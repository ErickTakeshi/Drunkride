<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento".
 *
 * @property integer $idevento
 * @property string $nome
 * @property string $endereco
 * @property string $data
 *
 * @property Carona[] $caronas
 * @property Interesse[] $interesses
 * @property Usuario[] $usuarioIdusuarios
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['nome'], 'string', 'max' => 100],
            [['endereco'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idevento' => Yii::t('app', 'Idevento'),
            'nome' => Yii::t('app', 'Nome'),
            'endereco' => Yii::t('app', 'Endereco'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaronas()
    {
        return $this->hasMany(Carona::className(), ['idevento' => 'idevento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInteresses()
    {
        return $this->hasMany(Interesse::className(), ['evento_idevento' => 'idevento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuarios()
    {
        return $this->hasMany(Usuario::className(), ['idusuario' => 'usuario_idusuario'])->viaTable('interesse', ['evento_idevento' => 'idevento']);
    }
}
