<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CommonKafedra;

/**
 * CommonKafedraSearch represents the model behind the search form of `backend\models\CommonKafedra`.
 */
class CommonKafedraSearch extends CommonKafedra
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kafedra_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'darajasi_uz', 'darajasi_ru', 'darajasi_en', 'kafedra_hodim_uz', 'kafedra_hodim_ru', 'kafedra_hodim_en', 'content_uz', 'content_ru', 'content_en', 'qabul_uz', 'qabul_ru', 'qabul_en', 'manzil_uz', 'manzil_ru', 'manzil_en', 'tel', 'email_uz', 'telegram'], 'safe'],
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
        $query = CommonKafedra::find();

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
            'kafedra_id' => $this->kafedra_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'lavozim_uz', $this->lavozim_uz])
            ->andFilterWhere(['like', 'lavozim_ru', $this->lavozim_ru])
            ->andFilterWhere(['like', 'lavozim_en', $this->lavozim_en])
            ->andFilterWhere(['like', 'darajasi_uz', $this->darajasi_uz])
            ->andFilterWhere(['like', 'darajasi_ru', $this->darajasi_ru])
            ->andFilterWhere(['like', 'darajasi_en', $this->darajasi_en])
            ->andFilterWhere(['like', 'kafedra_hodim_uz', $this->kafedra_hodim_uz])
            ->andFilterWhere(['like', 'kafedra_hodim_ru', $this->kafedra_hodim_ru])
            ->andFilterWhere(['like', 'kafedra_hodim_en', $this->kafedra_hodim_en])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'qabul_uz', $this->qabul_uz])
            ->andFilterWhere(['like', 'qabul_ru', $this->qabul_ru])
            ->andFilterWhere(['like', 'qabul_en', $this->qabul_en])
            ->andFilterWhere(['like', 'manzil_uz', $this->manzil_uz])
            ->andFilterWhere(['like', 'manzil_ru', $this->manzil_ru])
            ->andFilterWhere(['like', 'manzil_en', $this->manzil_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email_uz', $this->email_uz])
            ->andFilterWhere(['like', 'telegram', $this->telegram]);

        return $dataProvider;
    }
}
