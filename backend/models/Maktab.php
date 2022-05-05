<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "maktab".
 *
 * @property int $id
 * @property string $ishkunlari_uz
 * @property string $ishkunlari_ru
 * @property string $ishkunlari_en
 * @property string $tel
 * @property string $fax
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $biriktirilgan_uz
 * @property string $biriktirilgan_ru
 * @property string $biriktirilgan_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $allmk_id
 *
 * @property TezHavola $allmk
 */
class Maktab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maktab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ishkunlari_uz', 'ishkunlari_ru', 'ishkunlari_en', 'tel', 'fax', 'manzil_uz', 'manzil_ru', 'manzil_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en', 'content_uz', 'content_ru', 'content_en', 'allmk_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['allmk_id'], 'integer'],
            [['ishkunlari_uz', 'ishkunlari_ru', 'ishkunlari_en', 'tel', 'fax', 'manzil_uz', 'manzil_ru', 'manzil_en', 'biriktirilgan_uz', 'biriktirilgan_ru', 'biriktirilgan_en'], 'string', 'max' => 255],
            [['allmk_id'], 'exist', 'skipOnError' => true, 'targetClass' => TezHavola::className(), 'targetAttribute' => ['allmk_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ishkunlari_uz' => 'Ishkunlari Uz',
            'ishkunlari_ru' => 'Ishkunlari Ru',
            'ishkunlari_en' => 'Ishkunlari En',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'biriktirilgan_uz' => 'Biriktirilgan Uz',
            'biriktirilgan_ru' => 'Biriktirilgan Ru',
            'biriktirilgan_en' => 'Biriktirilgan En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'allmk_id' => 'Allmk ID',
        ];
    }

    /**
     * Gets query for [[Allmk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAllmk()
    {
        return $this->hasOne(TezHavola::className(), ['id' => 'allmk_id']);
    }
}
