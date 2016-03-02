<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $idusuario
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $telefone
 * @property integer $ativo
 *
 * @property Interesse[] $interesses
 * @property Evento[] $eventoIdeventos
 * @property UsuarioCarona[] $usuarioCaronas
 * @property Carona[] $caronaIdcaronas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ativo'], 'integer'],
            [['login'], 'string', 'max' => 50],
            [['senha'], 'string', 'max' => 30],
            [['nome'], 'string', 'max' => 100],
            [['telefone'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => Yii::t('app', 'Idusuario'),
            'login' => Yii::t('app', 'Login'),
            'senha' => Yii::t('app', 'Senha'),
            'nome' => Yii::t('app', 'Nome'),
            'telefone' => Yii::t('app', 'Telefone'),
            'ativo' => Yii::t('app', 'Ativo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInteresses()
    {
        return $this->hasMany(Interesse::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventoIdeventos()
    {
        return $this->hasMany(Evento::className(), ['idevento' => 'evento_idevento'])->viaTable('interesse', ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioCaronas()
    {
        return $this->hasMany(UsuarioCarona::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaronaIdcaronas()
    {
        return $this->hasMany(Carona::className(), ['idcarona' => 'carona_idcarona'])->viaTable('usuario_carona', ['usuario_idusuario' => 'idusuario']);
    }
}
