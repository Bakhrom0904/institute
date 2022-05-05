<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FakultetStaff;

/**
 * FakultetStaffSearch represents the model behind the search form of `backend\models\FakultetStaff`.
 */
class FakultetStaffSearch extends FakultetStaff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'staff_menu_sub_id'], 'integer'],
            [['staff_name_uz', 'staff_name_ru', 'staff_name_en', 'staff_rank_uz', 'staff_rank_ru', 'staff_rank_en', 'staff_img'], 'safe'],
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
        $query = FakultetStaff::find();

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
            'staff_menu_sub_id' => $this->staff_menu_sub_id,
        ]);

        $query->andFilterWhere(['like', 'staff_name_uz', $this->staff_name_uz])
            ->andFilterWhere(['like', 'staff_name_ru', $this->staff_name_ru])
            ->andFilterWhere(['like', 'staff_name_en', $this->staff_name_en])
            ->andFilterWhere(['like', 'staff_rank_uz', $this->staff_rank_uz])
            ->andFilterWhere(['like', 'staff_rank_ru', $this->staff_rank_ru])
            ->andFilterWhere(['like', 'staff_rank_en', $this->staff_rank_en])
            ->andFilterWhere(['like', 'staff_img', $this->staff_img]);

        return $dataProvider;
    }
}
