<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KafedraArticles;

/**
 * KafedraArticlesSearch represents the model behind the search form of `backend\models\KafedraArticles`.
 */
class KafedraArticlesSearch extends KafedraArticles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'art_kafedra_oqituvchilari_id', 'number'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'article_degree_uz', 'article_degree_ru', 'article_degree_en', 'date'], 'safe'],
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
        $query = KafedraArticles::find();

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
            'art_kafedra_oqituvchilari_id' => $this->art_kafedra_oqituvchilari_id,
            'number' => $this->number,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'article_degree_uz', $this->article_degree_uz])
            ->andFilterWhere(['like', 'article_degree_ru', $this->article_degree_ru])
            ->andFilterWhere(['like', 'article_degree_en', $this->article_degree_en])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
