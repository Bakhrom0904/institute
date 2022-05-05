<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fakultet;

/**
 * FakultetSearch represents the model behind the search form of `backend\models\Fakultet`.
 */
class FakultetSearch extends Fakultet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'faculty_uz', 'faculty_ru', 'faculty_en', 'rank_uz', 'rank_ru', 'rank_en', 'img', 'content_uz', 'content_ru', 'content_en', 'qabul_date_uz', 'qabul_date_ru', 'qabul_date_en', 'tel', 'fax', 'email', 'telegram', 'address_uz', 'address_ru', 'address_en', 'staff_uz', 'staff_ru', 'staff_en'], 'safe'],
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
        $query = Fakultet::find();

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
            'menu_sub_id' => $this->menu_sub_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'faculty_uz', $this->faculty_uz])
            ->andFilterWhere(['like', 'faculty_ru', $this->faculty_ru])
            ->andFilterWhere(['like', 'faculty_en', $this->faculty_en])
            ->andFilterWhere(['like', 'rank_uz', $this->rank_uz])
            ->andFilterWhere(['like', 'rank_ru', $this->rank_ru])
            ->andFilterWhere(['like', 'rank_en', $this->rank_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'qabul_date_uz', $this->qabul_date_uz])
            ->andFilterWhere(['like', 'qabul_date_ru', $this->qabul_date_ru])
            ->andFilterWhere(['like', 'qabul_date_en', $this->qabul_date_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'address_uz', $this->address_uz])
            ->andFilterWhere(['like', 'address_ru', $this->address_ru])
            ->andFilterWhere(['like', 'address_en', $this->address_en])
            ->andFilterWhere(['like', 'staff_uz', $this->staff_uz])
            ->andFilterWhere(['like', 'staff_ru', $this->staff_ru])
            ->andFilterWhere(['like', 'staff_en', $this->staff_en]);

        return $dataProvider;
    }
}
