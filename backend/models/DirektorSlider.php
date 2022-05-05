<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "direktor_slider".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string|null $img
 * @property string $field_uz
 * @property string $field_ru
 * @property string $field_en
 */
class DirektorSlider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direktor_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'field_uz', 'field_ru', 'field_en'], 'required'],
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'img', 'field_uz', 'field_ru', 'field_en'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'field_uz' => 'Field Uz',
            'field_ru' => 'Field Ru',
            'field_en' => 'Field En',
        ];
    }
}
