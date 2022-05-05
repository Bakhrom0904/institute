<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Maktab;

/**
 * MaktabSearch represents the model behind the search form of `backend\models\Maktab`.
 */
class MaktabSearch extends Maktab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'allmk_id'], 'integer'],
            [['ishkunlari_uz', 'ishkunlari_ru', 'ishkunlari_en', 'tel', 'fax', 'manzil_uz', 'manzil_ru', 'manzil_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en', 'content_uz', 'content_ru', 'content_en'], 'safe'],
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
        $query = Maktab::find();

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
            'allmk_id' => $this->allmk_id,
        ]);

        $query->andFilterWhere(['like', 'ishkunlari_uz', $this->ishkunlari_uz])
            ->andFilterWhere(['like', 'ishkunlari_ru', $this->ishkunlari_ru])
            ->andFilterWhere(['like', 'ishkunlari_en', $this->ishkunlari_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'manzil_uz', $this->manzil_uz])
            ->andFilterWhere(['like', 'manzil_ru', $this->manzil_ru])
            ->andFilterWhere(['like', 'manzil_en', $this->manzil_en])
            ->andFilterWhere(['like', 'biriktirilgan_uz', $this->biriktirilgan_uz])
            ->andFilterWhere(['like', 'biriktirilgan_ru', $this->biriktirilgan_ru])
            ->andFilterWhere(['like', 'biriktirilgan_en', $this->biriktirilgan_en])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en]);

        return $dataProvider;
    }
}
