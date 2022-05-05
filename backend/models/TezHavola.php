<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tez_havola".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $img
 * @property int $tez_men__sub_id
 * @property string $opisaniya_uz
 * @property string $opisaniya_ru
 * @property string $opisaniya_en
 *
 * @property MenuSub $tezMenSub
 */
class TezHavola extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tez_havola';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'tez_men__sub_id', 'opisaniya_uz', 'opisaniya_ru', 'opisaniya_en'], 'required'],
            [['tez_men__sub_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'img', 'opisaniya_uz', 'opisaniya_ru', 'opisaniya_en'], 'string', 'max' => 255],
            [['tez_men__sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['tez_men__sub_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'img' => 'Img',
            'tez_men__sub_id' => 'Tez Men  Sub ID',
            'opisaniya_uz' => 'Opisaniya Uz',
            'opisaniya_ru' => 'Opisaniya Ru',
            'opisaniya_en' => 'Opisaniya En',
        ];
    }

    /**
     * Gets query for [[TezMenSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTezMenSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'tez_men__sub_id']);
    }
}
