<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carona".
 *
 * @property integer $idcarona
 * @property integer $limite
 * @property string $caronacol
 * @property integer $idevento
 * @property string $status
 *
 * @property Evento $idevento0
 * @property UsuarioCarona[] $usuarioCaronas
 * @property Usuario[] $usuarioIdusuarios
 */
class Carona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['limite', 'idevento'], 'integer'],
            [['idevento'], 'required'],
            [['status'], 'string'],
            [['caronacol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarona' => Yii::t('app', 'Idcarona'),
            'limite' => Yii::t('app', 'Limite'),
            'caronacol' => Yii::t('app', 'Caronacol'),
            'idevento' => Yii::t('app', 'Idevento'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdevento0()
    {
        return $this->hasOne(Evento::className(), ['idevento' => 'idevento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioCaronas()
    {
        return $this->hasMany(UsuarioCarona::className(), ['carona_idcarona' => 'idcarona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuarios()
    {
        return $this->hasMany(Usuario::className(), ['idusuario' => 'usuario_idusuario'])->viaTable('usuario_carona', ['carona_idcarona' => 'idcarona']);
    }
}
