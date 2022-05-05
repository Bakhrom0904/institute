<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VideoGallery;

/**
 * VideoGallerySearch represents the model behind the search form of `backend\models\VideoGallery`.
 */
class VideoGallerySearch extends VideoGallery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'type_uz', 'type_ru', 'type_en', 'img', 'link', 'video_duration'], 'safe'],
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
        $query = VideoGallery::find();

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

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'type_uz', $this->type_uz])
            ->andFilterWhere(['like', 'type_ru', $this->type_ru])
            ->andFilterWhere(['like', 'type_en', $this->type_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'video_duration', $this->video_duration]);

        return $dataProvider;
    }
}
