<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MaktablarInfo;

/**
 * MaktablarInfoSearch represents the model behind the search form of `backend\models\MaktablarInfo`.
 */
class MaktablarInfoSearch extends MaktablarInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'maktab_togaraklar_en', 'maktab_info_menu_sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'kimga_biriktirilgan_uz', 'kimga_biriktirilgan_ru', 'kimga_biriktirilgan_en', 'tel', 'email', 'fax', 'manzil_uz', 'manzil_ru', 'manzil_en', 'sektor_uz', 'sektor_ru', 'sektor_en', 'maktab_tarixi_uz', 'maktab_tarixi_ru', 'maktab_tarixi_en', 'maktab_teacher_uz', 'maktab_teacher_ru', 'maktab_teacher_en', 'maktab_pupil_uz', 'maktab_pupil_ru', 'maktab_pupil_en', 'maktab_pasporti_uz', 'maktab_togaraklar_uz', 'maktab_togaraklar_ru', 'maktab_pasporti_ru', 'maktab_pasporti_en'], 'safe'],
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
        $query = MaktablarInfo::find();

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
            'maktab_togaraklar_en' => $this->maktab_togaraklar_en,
            'maktab_info_menu_sub_id' => $this->maktab_info_menu_sub_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'kimga_biriktirilgan_uz', $this->kimga_biriktirilgan_uz])
            ->andFilterWhere(['like', 'kimga_biriktirilgan_ru', $this->kimga_biriktirilgan_ru])
            ->andFilterWhere(['like', 'kimga_biriktirilgan_en', $this->kimga_biriktirilgan_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'manzil_uz', $this->manzil_uz])
            ->andFilterWhere(['like', 'manzil_ru', $this->manzil_ru])
            ->andFilterWhere(['like', 'manzil_en', $this->manzil_en])
            ->andFilterWhere(['like', 'sektor_uz', $this->sektor_uz])
            ->andFilterWhere(['like', 'sektor_ru', $this->sektor_ru])
            ->andFilterWhere(['like', 'sektor_en', $this->sektor_en])
            ->andFilterWhere(['like', 'maktab_tarixi_uz', $this->maktab_tarixi_uz])
            ->andFilterWhere(['like', 'maktab_tarixi_ru', $this->maktab_tarixi_ru])
            ->andFilterWhere(['like', 'maktab_tarixi_en', $this->maktab_tarixi_en])
            ->andFilterWhere(['like', 'maktab_teacher_uz', $this->maktab_teacher_uz])
            ->andFilterWhere(['like', 'maktab_teacher_ru', $this->maktab_teacher_ru])
            ->andFilterWhere(['like', 'maktab_teacher_en', $this->maktab_teacher_en])
            ->andFilterWhere(['like', 'maktab_pupil_uz', $this->maktab_pupil_uz])
            ->andFilterWhere(['like', 'maktab_pupil_ru', $this->maktab_pupil_ru])
            ->andFilterWhere(['like', 'maktab_pupil_en', $this->maktab_pupil_en])
            ->andFilterWhere(['like', 'maktab_pasporti_uz', $this->maktab_pasporti_uz])
            ->andFilterWhere(['like', 'maktab_togaraklar_uz', $this->maktab_togaraklar_uz])
            ->andFilterWhere(['like', 'maktab_togaraklar_ru', $this->maktab_togaraklar_ru])
            ->andFilterWhere(['like', 'maktab_pasporti_ru', $this->maktab_pasporti_ru])
            ->andFilterWhere(['like', 'maktab_pasporti_en', $this->maktab_pasporti_en]);

        return $dataProvider;
    }
}
