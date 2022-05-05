<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emb_pages".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $emb_id
 *
 * @property Emblems $emb
 */
class EmbPages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emb_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'emb_id'], 'required'],
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['emb_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
            [['emb_id'], 'exist', 'skipOnError' => true, 'targetClass' => Emblems::className(), 'targetAttribute' => ['emb_id' => 'id']],
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
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'emb_id' => 'Emb ID',
        ];
    }

    /**
     * Gets query for [[Emb]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmb()
    {
        return $this->hasOne(Emblems::className(), ['id' => 'emb_id']);
    }
}
