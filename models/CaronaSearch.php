<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carona;

/**
 * CaronaSearch represents the model behind the search form about `app\models\Carona`.
 */
class CaronaSearch extends Carona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarona', 'limite', 'idevento'], 'integer'],
            [['caronacol', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Carona::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idcarona' => $this->idcarona,
            'limite' => $this->limite,
            'idevento' => $this->idevento,
        ]);

        $query->andFilterWhere(['like', 'caronacol', $this->caronacol])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
