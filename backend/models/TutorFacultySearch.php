<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TutorFaculty;

/**
 * TutorFacultySearch represents the model behind the search form of `backend\models\TutorFaculty`.
 */
class TutorFacultySearch extends TutorFaculty
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['faculty_name_uz', 'faculty_name_ru', 'faculty_name_en'], 'safe'],
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
        $query = TutorFaculty::find();

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
        ]);

        $query->andFilterWhere(['like', 'faculty_name_uz', $this->faculty_name_uz])
            ->andFilterWhere(['like', 'faculty_name_ru', $this->faculty_name_ru])
            ->andFilterWhere(['like', 'faculty_name_en', $this->faculty_name_en]);

        return $dataProvider;
    }
}
