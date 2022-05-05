<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Books;

/**
 * BooksSearch represents the model behind the search form of `backend\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'book_fak_staff_id', 'number'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'chop_etilgan_joy_uz', 'chop_etilgan_joy_ru', 'chop_etilgan_joy_en', 'date'], 'safe'],
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
        $query = Books::find();

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
            'book_fak_staff_id' => $this->book_fak_staff_id,
            'number' => $this->number,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'chop_etilgan_joy_uz', $this->chop_etilgan_joy_uz])
            ->andFilterWhere(['like', 'chop_etilgan_joy_ru', $this->chop_etilgan_joy_ru])
            ->andFilterWhere(['like', 'chop_etilgan_joy_en', $this->chop_etilgan_joy_en])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
