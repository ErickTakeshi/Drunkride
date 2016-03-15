<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_carona".
 *
 * @property integer $usuario_idusuario
 * @property integer $carona_idcarona
 *
 * @property Carona $caronaIdcarona
 * @property Usuario $usuarioIdusuario
 */
class UsuarioCarona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario_carona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_idusuario', 'carona_idcarona'], 'required'],
            [['usuario_idusuario', 'carona_idcarona'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_idusuario' => Yii::t('app', 'Usuario Idusuario'),
            'carona_idcarona' => Yii::t('app', 'Carona Idcarona'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaronaIdcarona()
    {
        return $this->hasOne(Carona::className(), ['idcarona' => 'carona_idcarona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuario()
    {
        return $this->hasOne(Usuario::className(), ['idusuario' => 'usuario_idusuario']);
    }
}
