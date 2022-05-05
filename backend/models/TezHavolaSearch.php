<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TezHavola;

/**
 * TezHavolaSearch represents the model behind the search form of `backend\models\TezHavola`.
 */
class TezHavolaSearch extends TezHavola
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tez_men__sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'opisaniya_uz', 'opisaniya_ru', 'opisaniya_en'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TezHavola::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tez_men__sub_id' => $this->tez_men__sub_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'opisaniya_uz', $this->opisaniya_uz])
            ->andFilterWhere(['like', 'opisaniya_ru', $this->opisaniya_ru])
            ->andFilterWhere(['like', 'opisaniya_en', $this->opisaniya_en]);

        return $dataProvider;
    }
}
