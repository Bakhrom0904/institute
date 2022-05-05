<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TutorInfo;

/**
 * TutorInfoSearch represents the model behind the search form of `backend\models\TutorInfo`.
 */
class TutorInfoSearch extends TutorInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tutor_menu_sub_id', 'tutor_faculty_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en', 'tel', 'telegram', 'email', 'manzil_uz', 'manzil_ru', 'manzil_en', 'img', 'content_uz', 'content_ru', 'content_en', 'tutor_duty_uz', 'tutor_duty_ru', 'tutor_duty_en', 'birik_talaba_royxati_uz', 'birik_talaba_royxati_ru', 'birik_talaba_royxati_en'], 'safe'],
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
        $query = TutorInfo::find();

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
            'tutor_menu_sub_id' => $this->tutor_menu_sub_id,
            'tutor_faculty_id' => $this->tutor_faculty_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'biriktirilgan_uz', $this->biriktirilgan_uz])
            ->andFilterWhere(['like', 'biriktirilgan_ru', $this->biriktirilgan_ru])
            ->andFilterWhere(['like', 'biriktirilgan_en', $this->biriktirilgan_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'manzil_uz', $this->manzil_uz])
            ->andFilterWhere(['like', 'manzil_ru', $this->manzil_ru])
            ->andFilterWhere(['like', 'manzil_en', $this->manzil_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'tutor_duty_uz', $this->tutor_duty_uz])
            ->andFilterWhere(['like', 'tutor_duty_ru', $this->tutor_duty_ru])
            ->andFilterWhere(['like', 'tutor_duty_en', $this->tutor_duty_en])
            ->andFilterWhere(['like', 'birik_talaba_royxati_uz', $this->birik_talaba_royxati_uz])
            ->andFilterWhere(['like', 'birik_talaba_royxati_ru', $this->birik_talaba_royxati_ru])
            ->andFilterWhere(['like', 'birik_talaba_royxati_en', $this->birik_talaba_royxati_en]);

        return $dataProvider;
    }
}
